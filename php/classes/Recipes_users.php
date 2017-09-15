<?php

class RecipesUsers
{
    private $id;
    private $recipes_id;
    private $users_id;
    
    
     function __construct($id, $recipes_id, $users_id) {
       $this->id = $id;
       $this->recipes_id = $recipes_id;
        $this->users_id = $users_id;
       }


    
     function setIdRecipesUsers($id){
       $this->id = $id;
     } 
     function getIdRecipesUsers(){
       return $this->id;
     } 
     function setRecipesId($recipes_id){
       $this->recipes_id = $recipes_id;
     } 
     function getRecipesId(){
       return $this->recipes_id;
     } 
      function setUserId($users_id){
       $this->users_id = $users_id;
     } 
     function getUserId(){
       return $this->users_id;
     }
}

?> 