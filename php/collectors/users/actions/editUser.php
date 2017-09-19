<?php
 session_start();






if (isset($_SESSION['MiSession'])) {
			echo '<script language="javascript">';
			echo 'alert("No tiene autorización para esta página.");document.location.href="../../../../index.php"';
			echo '</script>';
		}


if (isset($_SESSION['MiAdmin'])){



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
	$peopleAct  = $UserCollectorObj->editPeople($idP, $name, $surname, $email);
	


	if ($userAct === "user" AND $peopleAct === "people") {
		# code...
		
		echo '<script language="javascript">';
			echo 'alert("El nombre de usuario y correo ya existen. Intente otro");document.location.href="editarUser.php?id=' .$idU .'&pid=' .$idP .'"' ;
			echo '</script>';
			
	}


	if ($userAct === "user" OR $peopleAct === "email") {
		# code...
		if ($userAct === "user") {
			echo '<script language="javascript">';
			echo 'alert("El nombre de usuario ya existe. Intente otro");document.location.href="editarUser.php?id=' .$idU .'&pid=' .$idP .'"' ;
			echo '</script>';
		} 

		else 
		{
			echo '<script language="javascript">';
			echo 'alert("El correo ya existe. Intente otro");document.location.href="editarUser.php?id=' .$idU .'&pid=' .$idP .'"' ;
			echo '</script>';
		}
		
		
			
	}


	if ($userAct === "ok" OR $peopleAct === "ok") {
		# code...

		echo '<script language="javascript">';
			echo 'alert("Los datos de cuenta se han actualizado");document.location.href="usersCrud.php"';
			echo '</script>';
	}

		if ($userAct === "same" AND $peopleAct === "same") {
		# code...
		
		echo '<script language="javascript">';
			echo 'alert("No se detectaron cambios.");document.location.href="usersCrud.php"';
			echo '</script>';
	}







	/*if () {
		# code...
		
		echo '<script language="javascript">';
			echo 'alert("El nombre de usuario ya existe. Intente otro");document.location.href="editarUser.php?id=' .$idU .'&pid=' .$idP .'"' ;
			echo '</script>';
			
	}

	if () {
		# code...

		echo '<script language="javascript">';
			echo 'alert("Los datos de cuenta se han actualizado");document.location.href="usersCrud.php"';
			echo '</script>';
	}

		if () {
		# code...
		
		echo '<script language="javascript">';
			echo 'alert("No se detectaron cambios en la seccion persona");document.location.href="usersCrud.php"';
			echo '</script>';
	}
*/

} else 
{
  echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../../index.php'>";     
}
?>
