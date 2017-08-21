<?php

include_once('IllnessRecipes.php');
include_once('Collector.php');

class IllnessRecipesCollector extends Collector
{
  
  function showIllnessRecipes() {
    $rows = self::$db->getRows("SELECT * FROM illness_recipes ");    //arreglo de objetos bidimensionales    
    echo "linea 1";
    $arrayIllnessRecipes= array();        
    foreach ($rows as $c){  //Objeto illness
      $aux = new IllnessRecipes($c{'id'},$c{'illness_id'},$c{'recipes_id'}); //Crea un objeto illness
      array_push($arrayIllnessRecipes, $aux); //Guarda una coleccion de demo
    }
    return $arrayIllnessRecipes;        
  }

  //Envia el id para editar el campo en el php

  function showIllnessRecipes($id){
    $row = self::$db->getRows("SELECT * FROM illness_recipes WHERE id= ?", array("{$id}"));
    $ObjIllnessRecipes = new IllnessRecipes($row[0]{'id'}, $row[0]{'illness_id'}, $row[0]{'recipes_id'});
    return $ObjIllnessRecipes;
  }

  function updateIllnessRecipes($id, $illness_id, $recipes_id){
    $insertrow = self::$db->updateRow("UPDATE public.illness_recipes SET illness_id = ? AND recipes_id = ? WHERE id = ? ", array( "{$illness_id}", "{$recipes_id}", $id));
  }

  function deleteIllnessRecipes($id){
    $deleterow = self::$db->deleteRow("DELETE FROM public.illness_recipes WHERE id= ?", array("{$id}"));
    
  }

  function createIllnessRecipes($id, $illness_id, $recipes_id){
    $insertrow = self::$db->insertRow("INSERT INTO public.illness_recipes(id,illness_id, recipes_id) VALUES (?, ?, ?)", array( "{$id}","{$illness_id}", "{$recipes_id}"));
  }

}
?>