<?php require("include/session.php"); ?>
<?php include ("include/functions.php");?>
<?php if(logged_in()) redirect_to("main.php"); ?>
<?php require ("include/header.php"); ?>
<form action="login.php" method="post">
    <table>
        <tr><td>Usuario: </td><td><input type="text" name="username"></td></tr>
        <tr><td>Contraseña: </td><td> <input type="password" name ="password"></td> </tr>
        <tr><td></td><td><input type="submit" value="Ingresar"></td></tr>
    </table>
</form>
<?php require ("include/footer.php"); ?>