
<?php require_once __DIR__ . "/includes/header.php" ?>

<section id="home">
    <?php
    if (!$_SESSION['logged_in']){
        require_once __DIR__ ."/not-logged-in.php";
    } else{
        require_once __DIR__ ."/logged.php";
    } ?>
</section>

<?php require_once __DIR__ . "/includes/footer.php" ?>