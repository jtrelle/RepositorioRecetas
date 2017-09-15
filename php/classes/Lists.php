<?php

class Lists
{
    private $id;
    private $name;
    
     function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
     }   
    
     function setIdList($id){
       $this->id = $id;
     } 

     function getIdList(){
       return $this->id;
     } 
     function setListName($name){
       $this->name = $name;
     } 
     function getListName(){
       return $this->name;
     } 
}

?>
