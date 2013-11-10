<?php require("include/session.php"); ?>
<?php require("include/functions.php"); ?>
<?php verify_session();?>
<?php require ("include/header.php"); ?>
<?php echo("<strong> Bienvenido ".$_SESSION["username"]."</strong>");?>
<b><a href="include\logout.php">Desconectar</a></b>
<?php require ("include/footer.php"); ?>


