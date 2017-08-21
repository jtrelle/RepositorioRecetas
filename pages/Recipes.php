<?php

class Recipes
{
    private $id;
    private $image;
    private $preparation;
    private $lists_id;

    
     function __construct($id, $image, $preparation, $lists_id) {
       $this->id = $id;
       $this->image = $image;
       $this->preparation = $preparation;
       $this->lists_id = $lists_id;
     }
    
     function setId($id){
       $this->id = $id;
     } 
     function getId(){
       return $this->id;
     } 
     function setImage($image){
       $this->image = $image;
     } 
     function getImage(){
       return $this->image;
     } 
     function setPreparation($preparation)
     {
       $this->preparation = $preparation;
     }
     function getPreparation()
     {
       return $this->preparation;
     }
     function setListsId($lists_id)
     {
       $this->lists_id = $lists_id;
     }
     function getListsId($lists_id)
     {
       return $this->lists_id;
     }
}

?> 