<?php

include_once("../UserCollector.php");
$id=$_GET["id"];


$UserCollectorObj = new UserCollector();
$UserCollectorObj->cambiarRol($id, $_POST['comboRoles']);

 echo '<script language="javascript">';
 echo 'alert("Rol actualizado");document.location.href="../../../collectors/users/actions/usersCrud.php"';
  echo '</script>';



?>