<?php
session_start();

$id=$_GET["id"];
include_once('../UserCollector.php');
$UserCollectorObj = new UserCollector();
$UserCollectorObj->deleteUser($id);

echo '<script language="javascript">';
			echo 'alert("El usuario se ha eliminado.");document.location.href="usersCrud.php"';
			echo '</script>';

?>

