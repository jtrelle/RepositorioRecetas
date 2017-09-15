<?php

class People
{
    private $id;
    private $name;
    private $surname;
    private $email;


    
     function __construct($name, $surname, $email) {
      $this->name = $name;
       $this->surname = $surname;
       $this->email = $email;
     }
    
     function setIdPeople($id){
       $this->id = $id;
     } 

     function getIdPeople(){
       return $this->id;
     } 
     function setPeopleName($name){
       $this->name = $name;
     } 
     function getPeopleName(){
       return $this->name;
     } 
      function setPeopleSurname($surname){
       $this->surname = $surname;
     } 
     function getPeopleSurname(){
       return $this->surname;
     } 
      function setPeopleEmail($email){
       $this->email = $email;
     } 
     function getPeopleEmail(){
       return $this->email;
     }
  
}

?>
