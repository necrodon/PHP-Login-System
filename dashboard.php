<?php 
// Allo the config
define('__CONFIG__', true);

require_once "inc/config.php";
 ?>

<?php require_once "inc/header.php"; ?>


    <?php echo $_SESSION['user_id']; ?>

<a href="login.php">login</a>
<a href="registrer.php">registrer</a>
<?php require_once "inc/footer.php" ?>