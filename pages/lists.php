<?php
//1ro hacer los objetos 
class Lists
{
    private $id;
    private $name;
    
     function __construct($id, $name) {
       $this->id = $id;
       $this->name = $name;
     }
    
     function setId($id){
       $this->id = $id;
     } 
     function getId(){
       return $this->id;
     } 
     function setName($name){
       $this->name = $name;
     } 
     function getName(){
       return $this->name;
     } 
}

?> 
