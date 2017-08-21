<?php

class Roles
{
    private $id;
    private $role;
    
     function __construct($id, $role {
       $this->id = $id;
       $this->role = $role;
     }
    
     function setId($id){
       $this->id= $id;
     } 
     function getId(){
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
