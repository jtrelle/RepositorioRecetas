<?php
	

 session_start();
if (isset($_SESSION['MiSession'])) {
			echo '<script language="javascript">';
			echo 'alert("No tiene autorización para esta página.");document.location.href="../../../../index.php"';
			echo '</script>';
		}


if (isset($_SESSION['MiAdmin'])){



 	$fname = $_POST['fname'];
 	$lname = $_POST['lname'];
 	$email = $_POST['email'];
	$username = $_POST['user'];
	$password = $_POST['pass'];

	include_once("../UserCollector.php");

	$UserCollectorObj = new USerCollector();





	if(empty($_POST['fname']) OR empty($_POST['lname']) OR empty($_POST['email']) OR empty($_POST['user']  OR empty($_POST['pass']))){

		echo '<script language="javascript">';
		echo 'alert("Debe llenar TODOS los campos");document.location.href="formNuevo.php"';
		echo '</script>';

	} else {
		$regUser = $UserCollectorObj->crearUser($fname, $lname, $email, $username, $password);

	if ($regUser == "user") {
		echo '<script language="javascript">';
		echo 'alert("El nombre de usuario ya existe. Intente con otro.");document.location.href="formNuevo.php"';
		echo '</script>';
	}

	if ($regUser == "email") {
		echo '<script language="javascript">';
		echo 'alert("La dirreción de e-mail ya existe. Intente con otra.");document.location.href="formNuevo.php"';
		echo '</script>';
	}else{

		echo '<script language="javascript">';
		echo 'alert("Usuario creado");document.location.href="usersCrud.php"';
		echo '</script>';
	}

	}



    
}	

?>
