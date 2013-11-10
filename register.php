<?php require("include/session.php"); ?>
<?php include ("include/functions.php");?>
<?php if(logged_in()) redirect_to("main.php"); ?>
<?php require ("include/header.php"); ?>
<h1>Regístrate</h1>

<?php
if (isset($_POST["submit"]))
{
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    
    if ( empty($name)|| empty($username) || empty ($password) || empty($confirm_password))
    {
        echo "Debes rellenar todos los campos";
    }
    else
    {
        $error="";
        if (strlen($name)<=6 || strlen($name)>=100){
            $error .= "El nombre debe tener más de 6 carácteres y menos que 100";
        }
        
        if (strlen($username)<=6 || strlen($username)>=15){
            $error .= "El nombre de usuario debe tener más de 6 carácteres y menos que 15";
        }
        
           if (strlen($password)<=6 || strlen($password)>=15){
            $error .= "El nombre de usuario debe tener más de 6 carácteres y menos que 15";
        }
        
        if ($password != $confirm_password)
        {
            $error.="Las contraseñas no coinciden";
        }
        
        if (empty ($error))
        {
            
        }
        else
        {
            echo "Estos son los siguientes errores:<br> $error";
        }
    }
}
else
{
    $name= "";
    $username="";
}
?>
<form action="register.php" method="post">
    <table>
        <tr><td>Nombre Completo: </td><td><input type="text" name="name" value="<?php echo $name;?>"></td></tr>
        <tr><td>Nombre: </td><td><input type="text" name="username" value="<?php echo $username;?>"></td></tr>
        <tr><td>Contraseña: </td><td> <input type="password" name ="password"></td> </tr>
         <tr><td>Confirmar Contraseña: </td><td> <input type="password" name ="confirm_password"></td> </tr>
        <tr><td></td><td><input type="submit" value="Registrar" name="submit"></td></tr>
    </table>
</form>
<?php require ("include/footer.php"); ?>