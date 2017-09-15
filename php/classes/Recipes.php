<?php

class Recipes
{
    public $id;
    public $image;
    public $preparation;
    public $lists_id;
    public $description;
    public $name;

    
     function __construct($id, $image, $preparation, $lists_id, $description, $name) {
       $this->id = $id;
       $this->image = $image;
       $this->preparation = $preparation;
       $this->lists_id = $lists_id;
       $this->description = $description;
       $this->name = $name;
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
     function getListsId()
     {
       return $this->lists_id;
     }
     function setDescription($description)
     {
       $this->description = $description;
     }
     function getDescription()
     {
       return $this->description;
     }
     function setName($name)
     {
       $this->name = $name;
     }
     function getName()
     {
       return $this->name;
     }
}

?> 