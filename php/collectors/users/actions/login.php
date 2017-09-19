<?php
	

if (isset($_SESSION['MiSession'])) {
			echo '<script language="javascript">';
			echo 'alert("No tiene autorización para esta página.");document.location.href="../../../../index.php"';
			echo '</script>';
		}


if (isset($_SESSION['MiAdmin'])){


 session_start();
	$username = $_POST['user'];
	$password = $_POST['password'];

	include_once("../UserCollector.php");

	$UserCollectorObj = new USerCollector();
    
	$loggedUser = $UserCollectorObj->login($username, $password);

	if ($loggedUser == "bad") {

		echo '<script language="javascript">';
			echo 'alert("Usuario o contraseña incorrectos, intente de nuevo");document.location.href="../../../../pages/ingresar.php"';
			echo '</script>';


	}
	elseif ($loggedUser == "admin") {
		echo '<script language="javascript">';
			echo 'alert("Inicie sesion como Administrador");document.location.href="../../../../php/admin/adminhome.php"';
			echo '</script>';
	}
	else{


		$_SESSION['MiSession'] = $loggedUser[0]['name'] . " " . $loggedUser[0]['surname'];
		$_SESSION['ProfileImage'] = $loggedUser[0]['image'];
		$_SESSION['UserId'] = $loggedUser[0]['id'];
		$_SESSION['PeopleId'] = $loggedUser[0]['people_id'];
		$_SESSION['UserType'] = $loggedUser[0]['roles_id'];

      header("Location:../../../../index.php");
	}
  	
}

?>
