var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var sourcemaps = require('gulp-sourcemaps');

var dist_dir = '../../public/assets/';
var dev_dir = './src';

gulp.task('sass', function () {
    return gulp.src(dev_dir + '/sass/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(concat('app.min.css'))
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(dist_dir + 'css'));
});

gulp.task('js', function(){
    return gulp.src(dev_dir + '/javascript/*.js')
        .pipe(sourcemaps.init())
        .pipe(concat('app.min.js'))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(dist_dir + 'js'))
});

gulp.task('watch', function () {
    gulp.watch(dev_dir + '/sass/**/*.scss', ['sass']);
    gulp.watch(dev_dir + '/javascript/*.js', ['js']);
});

gulp.task('default', [ 'sass', 'js' , 'watch']);