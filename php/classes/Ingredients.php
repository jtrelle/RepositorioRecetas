<?php

class Ingredients 
{
    private $id;
    private $ingredient;
    private $portions_id;
    private $recipes_id;
    
     function __construct($id, $ingredient, $portions_id,$recipes_id) {
        $this->id = $id;
        $this->ingredient = $ingredient;
        $this->portions_id = $portions_id;
        $this->recipes_id = $recipes_id;
     }   
    
     function setIdIngredients($id){
       $this->id = $id;
     } 

     function getIdIngredients(){
       return $this->id;
     } 
     function setIngredient($ingredient){
       $this->ingredient = $ingredient;
     } 
     function getIngredient(){
       return $this->ingredient;
     } 
      function setIngredientPortionsId($portions_id){
       $this->portions_id = $portions_id;
     } 
     function getIngredientPortionsId(){
       return $this->portions_id;
     } 
      function setIngredientRecipesId($recipes_id){
       $this->recipes_id = $recipes_id;
     } 
     function getIngredientRecipesId(){
       return $this->recipes_id;
     } 

}

?>
