<?php

class Users
{
    private $id;
    private $username;
    private $password;
    private $people_id;
    private $image;
    private $nombre;
    private $rol;
    
  /*   function __construct($id,$username, $password, $people_id, $image, $nombre, $rol) {
       $this->id = $id;
      $this->username = $username;
       $this->password = $password;
       $this->people_id = $people_id;
       $this->image = $image;
       $this->nombre = $nombre;
       $this->rol = $rol;
     }
*/

      function __construct() {
       $this->id = "";
      $this->username = "";
       $this->password = "";
       $this->people_id = "";
       $this->image = "";
       $this->nombre = "";
       $this->rol = "";
     }


     function __construct0($id){
        $this->id = $id;
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
     function getUserUsername(){
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
      function setUserImage($image){
       $this->image = $image;
     } 
     function getUserImage(){
       return $this->image;
     }
      function setUserNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getUsernombre(){
       return $this->nombre;
     }  
      function setUserRol($rol){
       $this->rol = $rol;
     } 
     function getUserRol(){
       return $this->rol;
     }    

}

?>
