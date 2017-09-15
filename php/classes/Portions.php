<?php

class Portions 
{
    public $id;
    public $portion;
    
     function __construct($id, $portion) {
        $this->id = $id;
        $this->portion = $portion;
     }   
    
     function setIdPortions($id){
       $this->id = $id;
     } 

     function getIdPortions(){
       return $this->id;
     } 
     function setPortion($portion){
       $this->portion = $portion;
     } 
     function getPortion(){
       return $this->portion;
     } 

}

?>
