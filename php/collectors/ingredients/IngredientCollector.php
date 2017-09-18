<?php

include_once('../../../classes/Ingredients.php');
include_once('../../../dataBase/Collector.php');

class IngredientCollector extends Collector
{
  
  function showIngredients() {
    $rows = self::$db->getRows("SELECT * FROM ingredients "); //Recibe el fetch
							/*Self llama la instancia del objeto para 
							llegar al método getRows:

								class Collector extends dataBase
								{
						  			public static $db;  -->llama a este $db */	        
 
   
    $arrayIngredients= array();  //SE crea el arreglo donde se guardaran los objetos demo      
    foreach ($rows as $c){ //Hace foreach de cada row del fetch de la base

  $recipes = self::$db->getRows("SELECT name FROM recipes WHERE id =".$c{'recipes_id'});
        $recipesname = $recipes[0]{'name'};

  #$user = self::$db->getRows("SELECT username FROM users WHERE id =".$c{'users_id'});
        #$username = $user[0]{'username'};


      
      $aux = new Ingredients($c{'id'},$c{'ingredient'},$c{'recipes_id'},$c{'portions_id'}); //Crea el nuevo objeto demo
      
      array_push($arrayIngredients, $aux); 
    }
    return $arrayIngredients; //Se lo envía a la página para que muestre
  }



  //Envia el id para editar el campo en el php

  function showIngredient($id){
    $row = self::$db->getRows("SELECT * FROM ingredients WHERE id= ?", array("{$id}"));
    $ObjIngredients = new Ingredients($row[0]{'id'}, $row[0]{'ingredient'}, $row[0]{'portions_id'}, $row[0]{'recipes_id'});
    return $ObjIngredients;
  }

  function updateIngredient($id, $ingredient, $recipes_id, $portions_id){
    $insertrow = self::$db->updateRow("UPDATE public.ingredients SET ingredient = ?, recipes_id = ?, portions_id = ? WHERE id = ? ", array( "{$ingredient}", $recipes_id, $portions_id, $id));
  }

  function deleteIngredient($id){
    $deleterow = self::$db->deleteRow("DELETE FROM public.ingredients WHERE id= ?", array("{$id}"));
  }

  function createIngredient($ingredient, $recipes_id, $portions_id){
    $insertrow = self::$db->insertRow("INSERT INTO public.ingredients(ingredient, recipes_id, portions_id) VALUES (?,?,?)", array("{$ingredient}", $recipes_id, $portions_id));
  }  

}
?>
