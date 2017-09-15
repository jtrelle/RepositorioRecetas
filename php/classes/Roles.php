<?php

class Roles
{
    private $id;
    private $role;
  
    
     function __construct($id, $role) {
       $this->id = $id;
       $this->role = $role;
       }


    
     function setIdRole($id){
       $this->id = $id;
     } 
     function getIdRole(){
       return $this->id;
     } 
     function setRole($role){
       $this->role = $role;
     } 
     function getRole(){
       return $this->role;
     } 
     
}

?> 