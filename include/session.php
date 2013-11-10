<?php
session_start();

#RECUPERAR O ALMACENA UN MENSAJE DE UNA SESIÓN.
function session_msg($msg = "") {
    if (empty($msg)) {
        
        if (isset($_SESSION["message"]))
        {
            $msg = $_SESSION["message"];
            $_SESSION["message"] =" ";
            return $msg;
        }
        else
        {
            return "";
        }
            } else {
        $_SESSION ["message"] = $msg;
    }
}

#VERIFICAR UNA SESIÓN
function verify_session ()
{
    if(!isset($_SESSION["userid"]))
    {
        header("Location:index.php");
    }
}

//COMPRUEBA SI EL USUARIO HA INICIADO SESIÓN
function logged_in ()
{
    return isset($_SESSION["userid"]);
}

?>
