<?php

include_once('../../../classes/Recipes.php');
include_once('../../../dataBase/Collector.php');

class RecipesCollector extends Collector
{
  
  function showsRecipes() {
    $rows = self::$db->getRows("SELECT * FROM recipes ");    //arreglo de objetos bidimensionales    
    $arrayRecipes= array();        
    foreach ($rows as $c){  //Objeto illness
      $listquery = self::$db->getRows("SELECT name FROM lists WHERE id =".$c{'lists_id'});
      $listname = $listquery[0]{'name'};

      $aux = new Recipes($c{'id'}, $c{'image'}, $c{'preparation'}, $listname, $c{'description'}, $c{'name'}); //Crea un objeto illness
      array_push($arrayRecipes, $aux); //Guarda una coleccion de demo
    }
    return $arrayRecipes;        
  }

  //Envia el id para editar el campo en el php

  function showRecipes($id){
    $row = self::$db->getRows("SELECT * FROM recipes WHERE id= ?", array("{$id}"));
    $ObjRecipes = new Recipes($row[0]{'id'}, $row[0]{'image'}, $row[0]{'preparation'}, $row[0]{'lists_id'}, $row[0]{'description'}, $row[0]{'name'});
    return $ObjRecipes;
  }

  function updateRecipes($id, $image, $preparation, $lists_id, $description, $name){
    $insertrow = self::$db->updateRow("UPDATE public.recipes SET image = ? , preparation = ? , lists_id = ? , description = ? , name = ? WHERE id = ? ", array( "{$image}", "{$preparation}", "{$lists_id}" , "{$description}" , "{$name}" , $id));
  }

  function deleteRecipes($id){
    $deleterecipesusersrow = self::$db->deleteRow("DELETE FROM public.recipes_users WHERE recipes_id = ?", array("{$id}"));

    $deleteingredientrow = self::$db->deleteRow("DELETE FROM public.ingredients WHERE recipes_id= ?", array("{$id}"));

    $deleteillnessrecipesrow = self::$db->deleteRow("DELETE FROM public.illness_recipes WHERE recipes_id= ?", array("{$id}"));
    
    

    $deleterow = self::$db->deleteRow("DELETE FROM public.recipes WHERE id= ?", array("{$id}"));
    
  }

  function createRecipes($image, $preparation, $lists_id, $description, $name){
    $insertrow = self::$db->insertRow("INSERT INTO public.recipes(image, preparation, lists_id, description, name) VALUES (?, ?, ?, ?, ?)", array("{$image}","{$preparation}", "{$lists_id}" , "{$description}" , "{$name}"));
  }

}
?>
