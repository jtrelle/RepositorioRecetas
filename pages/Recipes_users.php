<?php

class Recipes_users
{
    private $id;
    private $recipes_id;
    private $users_id;
    
     function __construct($id, $recipes_id, $users_id {
       $this->id = $id;
       $this->recipes_id = $recipes_id;
       $this->users_id = $users_id;
     }
    
     function setId($id){
       $this->id= $id;
     } 
     function getId(){
       return $this->id;
     } 
     function setRecipes_id($recipes_id){
       $this->recipes_id = $recipes_id;
     } 
     function getRecipes_id(){
       return $this->recipes_id;
     } 
     function setUsers_id($users_id){
       $this->users_id = $users_id;
     } 
     function getUsers_id(){
       return $this->users_id;
     } 
}
}

?> 
