<?php

class IllnessRecipes
{
    private $id;
    private $illness_id;
    private $recipes_id
    
     function __construct($id, $illness_id, $recipes_id) {
       $this->id = $id;
       $this->illness_id = $illness_id;
       $this->recipes_id = $recipes_id;
     }
    
     function setId($id){
       $this->id = $id;
     } 
     function getId(){
       return $this->id;
     } 
     function setIllnessId($illness_id){
       $this->illness_id = $illness_id;
     } 
     function getIllnessId(){
       return $this->illness_id;
     }
     function setRecipesId($recipes_id){
       $this->recipes_id = $recipes_id;
     }
     function getRecipesId(){
       return $this->recipes_id; 
     } 
}

?> 