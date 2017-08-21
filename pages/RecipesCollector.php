<?php

include_once('Recipes.php');
include_once('Collector.php');

class RecipesCollector extends Collector
{
  
  function showRecipes() {
    $rows = self::$db->getRows("SELECT * FROM recipes ");    //arreglo de objetos bidimensionales    
    echo "linea 1";
    $arrayRecipes= array();        
    foreach ($rows as $c){  //Objeto illness
      $aux = new Recipes($c{'id'}, $c{'image'}, $c{'preparation'}, $c{'lists_id'}); //Crea un objeto illness
      array_push($arrayRecipes, $aux); //Guarda una coleccion de demo
    }
    return $arrayRecipes;        
  }

  //Envia el id para editar el campo en el php

  function showRecipes($id){
    $row = self::$db->getRows("SELECT * FROM recipes WHERE id= ?", array("{$id}"));
    $ObjRecipes = new Recipes($row[0]{'id'}, $row[0]{'image'}, $row[0]{'preparation'}, $row[0]{'lists_id'});
    return $ObjRecipes;
  }

  function updateRecipes($id, $image, $preparation, $lists_id){
    $insertrow = self::$db->updateRow("UPDATE public.recipes SET images = ? AND preparation = ? AND lists_id = ? WHERE id = ? ", array( "{$image}", "{$preparation}", "{$lists_id}" , $id));
  }

  function deleteRecipes($id){
    $deleterow = self::$db->deleteRow("DELETE FROM public.recipes WHERE id= ?", array("{$id}"));
    
  }

  function createRecipes($id,$name){
    $insertrow = self::$db->insertRow("INSERT INTO public.recipes(id, image, preparation, lists_id) VALUES (?, ?, ?, ?)", array( "{$id}","{$image}","{$preparation}", "{lists_id}"));
  }

}
?>