<?php
 session_start();

	 $name=$_POST['pName'];
	  $surname=$_POST['pSurname'];
	  $email=$_POST['pEmail'];


	include_once("../UserCollector.php");
	$UserCollectorObj = new USerCollector();
	$peopleAct = $UserCollectorObj->actualizarPeople($_SESSION['PeopleId'], $name, $surname, $email);
	$_SESSION['MiSession'] = $name . " " . $surname;


			echo '<script language="javascript">';
			echo 'alert("Perfil actualizado");document.location.href="../../../../pages/profile.php"';
			echo '</script>';
?>