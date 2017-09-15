<?php
	

 session_start();

 	$fname = $_POST['fname'];
 	$lname = $_POST['lname'];
 	$email = $_POST['email'];
	$username = $_POST['user'];
	$password = $_POST['pass'];
	$repeatpass = $_POST['pass2'];

	include_once("../UserCollector.php");

	$UserCollectorObj = new USerCollector();
    
	$regUser = $UserCollectorObj->registrarse($fname, $lname, $email, $username, $password, $repeatpass);

	if ($regUser == "pass" ) { //Error de repetición de contraseña

		echo '<script language="javascript">';
		echo 'alert("La contraseña es incorrecta.");document.location.href="../../../../pages/registro.php"';
		echo '</script>';
	}

	if ($regUser == "user") {
		echo '<script language="javascript">';
		echo 'alert("El nombre de usuario ya existe. Intente con otro.");document.location.href="../../../../pages/registro.php"';
		echo '</script>';
	}

	if ($regUser == "email") {
		echo '<script language="javascript">';
		echo 'alert("La dirreción de e-mail ya existe. Intente con otra.");document.location.href="../../../../pages/registro.php"';
		echo '</script>';
	}else{

		echo '<script language="javascript">';
		echo 'alert("Registro exitoso! Por favor, inicie sesión.");document.location.href="../../../../pages/ingresar.php"';
		echo '</script>';
	}

/*	if ($regUser == "ok") {
		
	}*/



	//document.location.href="../../../../pages/registro.php

	/*else //Campo correo o nombre de usuario ya existente
	{
			echo '<script language="javascript">';
			echo 'alert("todo se fue alv");"';
			echo '</script>';
	}
  	
 */

?>
