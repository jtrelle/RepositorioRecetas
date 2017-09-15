<?php

class Comments
{
    private $id;
    private $email;
    private $message;
    private $users_id;
    
     function __construct($id, $email, $message, $users_id) {
       $this->id = $id;
       $this->email = $email;
       $this->message = $message;
       $this->users_id = $users_id;
       }


    
     function setIdComments($id){
       $this->id = $id;
     } 
     function getIdComments(){
       return $this->id;
     } 
     function setEmail($email){
       $this->email = $email;
     } 
     function getEmail(){
       return $this->email;
     } 
     function setMessage($message){
       $this->message = $message;
     } 
     function getMessage(){
       return $this->message;
     }
      function setUserId($users_id){
       $this->users_id = $users_id;
     } 
     function getUserId(){
       return $this->users_id;
     }
}

?> 