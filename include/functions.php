<?php
#Redirecciona una página
function redirect_to ($url="")
{
    header("Location:".$url);
    exit();
}
?>
