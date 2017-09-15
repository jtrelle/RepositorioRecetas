<?php

include_once('../../../classes/Recipes_users.php');
include_once('../../../dataBase/Collector.php');

class RecipesUsersCollector extends Collector
{
  

   function showRecipesUsers() {
    $rows = self::$db->getRows("SELECT * FROM recipes_users "); 
  
    $arrayRecipesUsers= array();  //SE crea el arreglo donde se 


      
    foreach ($rows as $c){ //Hace foreach de cada row del fetch de la base
$recipes = self::$db->getRows("SELECT name FROM recipes WHERE id =".$c{'recipes_id'});
      $recipesname = $recipes[0]{'name'};

$user = self::$db->getRows("SELECT username FROM users WHERE id =".$c{'users_id'});
      $username = $user[0]{'username'};



      $aux = new RecipesUsers($c{'id'}, $recipesname,$username); //Crea el nuevo objeto demo
      
      array_push($arrayRecipesUsers, $aux); 
    }
    return $arrayRecipesUsers; //Se lo envía a l
     }






//Envia el id para editar el campo en el php

  function showRecipesUser($id){
    $row = self::$db->getRows("SELECT * FROM recipes_users WHERE id= ?", array("{$id}"));
    $ObjRecipesUsers = new RecipesUsers($row[0]{'id'}, $row[0]{'recipes_id'}, $row[0]{'users_id'});
    return $ObjRecipesUsers;

  }

  function updateRecipesUsers($id, $recipes_id, $users_id){
    $insertrow = self::$db->updateRow("UPDATE public.recipes_users SET recipes_id = ?,users_id = ?  WHERE id = ? ", array( "{$recipes_id}","{$users_id}", $id));



  }


  function deleteRecipesUsers($id){
  
    $deleterow = self::$db->deleteRow("DELETE FROM public.recipes_users WHERE id= ?", array("{$id}"));
    
  }

  function createRecipesUsers($recipes_id, $users_id){

    $insertrow = self::$db->insertRow("INSERT INTO public.recipes_users(recipes_id, users_id) VALUES (?, ?)", array("{$recipes_id}", "{$users_id}"));
    }

  }   
?>


