<?php require("include/session.php"); ?>
<?php require("include/functions.php"); ?>
<?php
$username = isset($_POST["username"]) ? $_POST["username"] : "";
$password = isset($_POST["password"]) ? $_POST["password"] : "";
if (empty($username) || empty($password)) {
    session_msg("Debe rellenar todos los campos");
    redirect_to("index.php");
}
$connection = mysql_connect("localhost", "root", "") or die("no se ha conectado a la bd");

$db_select = mysql_select_db("loteriaselmercat", $connection) or die("no se ha accedio a la bd");

$query = "SELECT * FROM usuarios where username ='" . $username . "' LIMIT 1";

$result = mysql_query($query);

if (mysql_num_rows($result) == 1) {
    $user = mysql_fetch_assoc($result);

    if ($user["paswword"] == $password) {
        $_SESSION ["username"]= $username;
        $_SESSION ["userid"] =$user["id"];
        session_msg("Ha iniciado sesión.");
        redirect_to("main.php");
        
    } else {
        session_msg("La contraseña no existe");
        redirect_to("index.php");
    }
} else {
    session_msg("Nombre de usuario inexistente.");
    redirect_to("index.php");
}
?>
