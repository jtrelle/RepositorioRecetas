<?php

if (isset($_SESSION['MiSession'])) {
			echo '<script language="javascript">';
			echo 'alert("No tiene autorización para esta página.");document.location.href="../../../../index.php"';
			echo '</script>';
		}


if (isset($_SESSION['MiAdmin'])){




include_once("../UserCollector.php");
$id=$_GET["id"];


$UserCollectorObj = new UserCollector();
$UserCollectorObj->cambiarRol($id, $_POST['comboRoles']);

 echo '<script language="javascript">';
 echo 'alert("Rol actualizado");document.location.href="../../../collectors/users/actions/usersCrud.php"';
  echo '</script>';


}
?>
