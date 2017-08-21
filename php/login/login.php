<?php
	


	$username = $_POST['user'];
	$password = $_POST['password'];

	include_once("UserCollector.php");
	$UserCollectorObj = new USerCollector();

	if ($UserCollectorObj->login($username, $password) == true) {
		$_SESSION['MiSession'] = $_POST['user'];
		
		 	header("Location:../../index.php");
	}
	else {
			echo '<script language="javascript">';
			echo 'alert("Usuario o contraseña incorrectos, intente de nuevo");document.location.href="../../pages/ingresar.php"';
			echo '</script>';
	}
  	
 

?>
