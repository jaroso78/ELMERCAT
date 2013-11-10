<?php
require("functions.php");
require("session.php"); 
$_SESSION[] = array();
session_destroy();
session_start();
session_msg("Se ha cerrado la sesión correctamente");
redirect_to("..\index.php");
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
