<?php

include_once('ingredients.php');
include_once('Collector.php');

class IngredientsCollector extends Collector
{
  
  function showIngredients() {
    $rows = self::$db->getRows("SELECT * FROM ingredients ");        

    $arrayIngredient= array();        
    foreach ($rows as $c){
      $aux = new Ingredients($c{'id'},$c{'ingredient'});
      array_push($arrayIngredient, $aux);
    }
    return $arrayIngredient;        
  }

}
?>

