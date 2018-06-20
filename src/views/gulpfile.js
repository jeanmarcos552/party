const gulp = require('gulp');
const sass = require('gulp-sass');
const concat = require('gulp-concat');
const watch = require('gulp-watch');
const uglify = require('gulp-uglify');
const rename = require("gulp-rename");
const sourcemaps = require('gulp-sourcemaps');
const dist_dir = '../../public/assets/';
const dev_dir = './src';


gulp.task('sass', function () {
    return gulp.src(dev_dir + '/sass/app.scss')
        .pipe(sourcemaps.init())
        .pipe(concat('app.min.css'))
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(dist_dir + 'css'));
});

gulp.task('javascript', function() {
    return gulp.src(dev_dir + '/javascript/*.js')
        .pipe(sourcemaps.init())
        .pipe(uglify())
        .pipe(rename(function (path) {
            path.basename += ".min";
            path.extname = ".js"
        }))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(dist_dir + 'js'));
});

gulp.task('watch', function(){
    gulp.watch(dev_dir + '/sass/**/*.scss', ['sass']);
    gulp.watch(dev_dir + '/javascript/*.js', ['javascript']);
});

gulp.task('default', [ 'sass', 'javascript' , 'watch']);