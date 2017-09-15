<?php

class RolesUser
{
    private $id;
    private $roles_id;
    private $users_id;
  
  
     function __construct($id, $roles_id, $users_id) {
       $this->id = $id;
       $this->roles_id = $roles_id;
       $this->users_id = $users_id;
     }
    
     function setId($id){
       $this->id = $id;
     } 

     function getId(){
       return $this->id;
     } 
     function setFkRoles($roles_id){
       $this->roles_id = $roles_id;
     } 
     function getFkRoles(){
       return $this->roles_id;
     } 
      function setFkUsers($users_id){
       $this->users_id = $users_id;
     } 
     function getFkUsers(){
       return $this->users_id;
     } 

}

?>
