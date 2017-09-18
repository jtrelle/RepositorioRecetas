<?php
 session_start();

 	$name=$_POST['fname'];
 	$surname=$_POST['lname'];
 	$email=$_POST['email'];
	$username=$_POST['user'];
	$pass=$_POST['pass'];
	 

$idU=$_GET["id"];
$idP=$_GET["pid"];

	include_once("../UserCollector.php");
	$UserCollectorObj = new UserCollector();
	$userAct = $UserCollectorObj->editUser($idU, $username, $pass);
	


	if ($userAct === "user") {
		# code...
		
		echo '<script language="javascript">';
			echo 'alert("El nombre de usuario ya existe. Intente otro");document.location.href="editarUser.php?id=' .$idU .'&pid=' .$idP .'"' ;
			echo '</script>';
			
	}

	if ($userAct === "ok") {
		# code...

		echo '<script language="javascript">';
			echo 'alert("Los datos de cuenta se han actualizado");document.location.href="usersCrud.php"';
			echo '</script>';
	}

		if ($userAct === "same") {
		# code...
		
		echo '<script language="javascript">';
			echo 'alert("No se detectaron cambios en la seccion usuario");document.location.href="usersCrud.php"';
			echo '</script>';
	}



			
?>
