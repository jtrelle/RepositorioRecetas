<?php
 session_start();




if (isset($_SESSION['MiSession'])) {
			echo '<script language="javascript">';
			echo 'alert("No tiene autorización para esta página.");document.location.href="../../../../index.php"';
			echo '</script>';
		}
if (isset($_SESSION['MiAdmin'])){


	 $username=$_POST['username'];
	 $pass=$_POST['pass'];
	  $pass2=$_POST['pass2'];


	include_once("../UserCollector.php");
	$UserCollectorObj = new USerCollector();
	$userAct = $UserCollectorObj->actualizarUser($_SESSION['UserId'], $username, $pass, $pass2);
	


	if ($userAct === "user") {
		# code...
		
		echo '<script language="javascript">';
			echo 'alert("El nombre de usuario ya existe. Intente otro");document.location.href="../../../../php/collectors/users/actions/editarCuenta.php"';
			echo '</script>';
			
	}

	if ($userAct === "ok") {
		# code...
		session_destroy();
		echo '<script language="javascript">';
			echo 'alert("Los datos de cuenta se han actualizado");document.location.href="../../../../pages/ingresar.php"';
			echo '</script>';
	}

		if ($userAct === "same") {
		# code...
		
		echo '<script language="javascript">';
			echo 'alert("No se detectaron cambios");document.location.href="../../../../pages/profile.php"';
			echo '</script>';
	}


	else{
		echo '<script language="javascript">';
			echo 'alert("Las contraseñas no coinciden");document.location.href="../../../../php/collectors/users/actions/editarCuenta.php"';
			echo '</script>';
	}

}			
?>
