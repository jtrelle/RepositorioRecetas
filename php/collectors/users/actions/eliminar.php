<?php
session_start();
if (isset($_SESSION['MiSession'])) {
			echo '<script language="javascript">';
			echo 'alert("No tiene autorización para esta página.");document.location.href="../../../../index.php"';
			echo '</script>';
		}


if (isset($_SESSION['MiAdmin'])){


$id=$_GET["id"];
include_once('../UserCollector.php');
$UserCollectorObj = new UserCollector();
$UserCollectorObj->deleteUser($id);

echo '<script language="javascript">';
			echo 'alert("El usuario se ha eliminado.");document.location.href="usersCrud.php"';
			echo '</script>';
}else 
{
  echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../../index.php'>";     
}
?>

