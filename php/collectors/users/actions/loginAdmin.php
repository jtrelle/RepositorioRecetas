<?php
	

 session_start();


if (isset($_SESSION['MiSession'])) {
			echo '<script language="javascript">';
			echo 'alert("No tiene autorización para esta página.");document.location.href="../../../../index.php"';
			echo '</script>';
		}


if (isset($_SESSION['MiAdmin'])){

	$username = $_POST['user'];
	$password = $_POST['password'];

	include_once("../UserCollector.php");

	$UserCollectorObj = new USerCollector();
    
	$loggedUser = $UserCollectorObj->loginAdmin($username, $password);



	if ($loggedUser == "bad") {

		echo '<script language="javascript">';
			echo 'alert("Usuario o contraseña incorrectos, intente de nuevo");document.location.href="../../../admin/adminhome.php"';
			echo '</script>';

		


	}
	elseif ($loggedUser == "user") {
		echo '<script language="javascript">';
			echo 'alert("Usted no es administrador, inicie sesion en su cuenta");document.location.href="../../../../pages/ingresar.php"';
			echo '</script>';
	}
	else{


		
			
		
		$_SESSION['MiAdmin'] = $loggedUser[0]['name'] . " " . $loggedUser[0]['surname'];
		
		
      header("Location:../../../admin/adminhome.php");
	}
  	
}

?>
