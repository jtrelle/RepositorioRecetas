<?php

include_once('Collector.php');
include_once('Recipes_users.php');

class Recipes_usersCollector extends Collector
{
  
  function showRecipes_users() {
    $rows = self::$db->getRows("SELECT * FROM recipes_users");    //arreglo de objetos bidimensionales    
    echo "linea 1";
    $arrayRecipes_users= array();        
    foreach ($rows as $c){  //Objeto demo
      $aux = new Recipes_users$c{'id'},$c{'recipes_users'},$c{'users_id'}); //Crea un objeto demo
      array_push($arrayRecipes_users, $aux); //Guarda una coleccion de demo
    }
    return $arrayRecipes_users;        
  }

  
}
?>

