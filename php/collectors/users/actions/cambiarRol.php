<?php
session_start();

$id=$_GET["id"];
include_once('../UserCollector.php');
$UserCollectorObj = new UserCollector();
$UserCollectorObj->cambiarRol($id);

echo '<script language="javascript">';
			echo 'alert("Rol cambiado");document.location.href="usersCrud.php"';
			echo '</script>';

?>

