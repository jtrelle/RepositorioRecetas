<?php

class Users
{
    private $id;
    private $username;
    private $password;
    private $people_id;
    
     function __construct($id, $username, $password, $people_id) {
       $this->id = $id;
       $this->username = $username;
       $this->password = $password;
       $this->people_id = $people_id;
     }
    
     function setIdUsers($id){
       $this->id = $id;
     } 

     function getIdUsers(){
       return $this->id;
     } 
     function setUsername($username){
       $this->username = $username;
     } 
     function getUsername(){
       return $this->username;
     } 
      function setUserPassword($password){
       $this->password = $password;
     } 
     function getUserPassword(){
       return $this->password;
     } 
      function setUserPeopleId($people_id){
       $this->people_id = $people_id;
     } 
     function getUserPeopleId(){
       return $this->people_id;
     } 

}

?> 
