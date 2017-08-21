<?php

include_once('Collector.php');
include_once('Roles.php');

class RolesCollector extends Collector
{
  
  function showRoles() {
    $rows = self::$db->getRows("SELECT * FROM roles");    //arreglo de objetos bidimensionales    
    echo "linea 1";
    $arrayRoles= array();        
    foreach ($rows as $c){  //Objeto demo
      $aux = new Roles$c{'id'},$c{'roles'}); //Crea un objeto demo
      array_push($arrayRoles, $aux); //Guarda una coleccion de demo
    }
    return $arrayRoles;        
  }

  
}
?>

