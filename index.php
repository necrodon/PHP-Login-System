<?php 
// Allo the config
define('__CONFIG__', true);

require_once "inc/config.php";
 ?>

<?php require_once "inc/header.php"; ?>

<input type="button" value="Load new document" onclick="newDoc()">

    <?php echo "hello world"; ?>

<a href="login.php">login</a>
<a href="registrer.php">registrer</a>
<?php require_once "inc/footer.php" ?>

