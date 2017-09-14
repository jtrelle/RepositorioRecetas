<?php
//1ro hacer los objetos 
class portions
{
    private $id;
    private $portion;
    
     function __construct($id, $portion) {
       $this->id = $id;
       $this->portion = $portion;
     }
    
     function setId($id){
       $this->id = $id;
     } 
     function getId(){
       return $this->id;
     } 
     function setNombre($portion){
       $this->portion = $portion;
     } 
     function getPortion(){
       return $this->portion;
     } 
}

?> 
