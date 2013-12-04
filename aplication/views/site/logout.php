<?php
	session_start();
	include("../../models/Conexion.php");
	include("../../models/Modelo.php");
	include("../../models/Login.php");
	include("../../libs/adodb5/adodb.inc.php");

	$login = new Login();
	if ($login->cerrar_session()) {
		header("location: inicio.php");
	}


?>


