<?php

include_once('../../../classes/IllnessRecipes.php');
include_once('../../../dataBase/Collector.php');

class IllnessRecipesCollector extends Collector
{
  
  function showsIllnessRecipes() {
    $rows = self::$db->getRows("SELECT * FROM illness_recipes ");    //arreglo de objetos bidimensionales    
    
    $arrayIllnessRecipes= array();        
    
    /*foreach ($rows as $c){  //Objeto illness
      $aux = new IllnessRecipes($c{'id'},$c{'illness_id'},$c{'recipes_id'}); //Crea un objeto illness
      array_push($arrayIllnessRecipes, $aux); //Guarda una coleccion de demo
    }*/

    foreach ($rows as $c){  //Objeto illness
      $recipes = self::$db->getRows("SELECT name FROM recipes WHERE id=".$c{'recipes_id'});
      
      $recipesname = $recipes[0]{'name'};

      $illness = self::$db->getRows("SELECT name FROM illness WHERE id=".$c{'illness_id'});
      $illnessname = $illness[0]{'name'};



      $aux = new IllnessRecipes($c{'id'},$illnessname,$recipesname); //Crea un objeto illness
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
    $insertrow = self::$db->updateRow("UPDATE public.illness_recipes SET illness_id = ? , recipes_id = ? WHERE id = ? ", array( "{$illness_id}", "{$recipes_id}", $id));
  }

  function deleteIllnessRecipes($id){
    $deleterow = self::$db->deleteRow("DELETE FROM public.illness_recipes WHERE id= ?", array("{$id}"));
    
  }

  function createIllnessRecipes($illness_id, $recipes_id){
    $insertrow = self::$db->insertRow("INSERT INTO public.illness_recipes(illness_id, recipes_id) VALUES (?, ?)", array("{$illness_id}", "{$recipes_id}"));
  }

}
?>