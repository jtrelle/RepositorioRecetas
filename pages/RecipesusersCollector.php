<?php

include_once('Collector.php');
include_once('Recipes_users.php');

class RecipesusersCollector extends Collector
{
  
  function showRecipesusers() {
    $rows = self::$db->getRows("SELECT * FROM recipes_users");    //arreglo de objetos bidimensionales    
    echo "linea 1";
    $arrayRecipes_users= array();        
    foreach ($rows as $c){  //Objeto demo
      $aux = new Recipesusers$c{'id'},$c{'recipes_users'},$c{'users_id'}); //Crea un objeto demo
      array_push($arrayRecipes_users, $aux); //Guarda una coleccion de demo
    }
    return $arrayRecipes_users;        
  }

  

  function deleteRecipesusers($id){
    $deleterow = self::$db->deleteRow
    ("DELETE FROM public.demo WHERE iddemo= ?", array("{$id}"));

  }




}
?>

