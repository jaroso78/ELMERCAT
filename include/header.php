<html>
    <head>
        <title>Mi aplicación</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
<?php
$msg_session = session_msg();
if(!empty($msg_session))
{
  echo "<i>$msg_session</i></br>";
  
}
?>