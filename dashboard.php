<?php 
// Allo the config
define('__CONFIG__', true);

require_once "inc/config.php";



	ForceLogin();
 ?>

<?php require_once "inc/header.php"; ?>


    <p>you are signed in as <?php echo $_SESSION['user_id']; ?></p>

<a href="login.php">login</a>
<a href="registrer.php">registrer</a>
<?php require_once "inc/footer.php" ?>
