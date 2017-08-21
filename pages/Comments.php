<?php

class Comments
{
    private $id;
    private $email;
    private $message;
    private $user_id;

    
     function __construct($id, $email, $message, $user_id  {
       $this->id = $id;
       $this->email = $email;
       $this->message = $message;
       $this->user_id = $user_id;
     }
    
     function setId($id){
       $this->id= $id;
     } 
     function getId(){
       return $this->id;
     } 
     function setRole($email){
       $this->email = $email;
     } 
     function getRole(){
       return $this->email;
     } 
     function setRole($message){
       $this->message = $message;
     } 
     function getRole(){
       return $this->message;
     } 
     function setRole($user_id){
       $this->user_id = $user_id;
     } 
     function getRole(){
       return $this->user_id;

     } 
}

?> 
