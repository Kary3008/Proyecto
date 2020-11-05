<?php
session_start(); //iniciar sesion
session_unset(); //cerrar sesion
session_destroy(); //destruir sesion
header("location:../session.php");//enviar a la parte de session.php
?>
