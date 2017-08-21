<?php
//1ro hacer los objetos 

include_once('portions.php');
include_once('recipes.php');

class Ingredients extends portions, recipes
{
    private $id;
    private $ingredient;
    
     function __construct($id, $ingredient, $portions_id, $recipes_id) {
       parent::__construct($portions_id, $recipes_id);
       $this->id = $id;
       $this->ingredient = $ingredient;
     }    
     function setId($id){
       $this->id = $id;
     } 
     function getId(){
       return $this->id;
     } 
     function setIngredient($ingredient){
       $this->ingredient = $ingredient;
     } 
     function getIngredient(){
       return $this->ingredient;
     } 
}
?> 
