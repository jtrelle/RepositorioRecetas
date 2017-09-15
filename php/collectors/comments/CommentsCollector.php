<?php

include_once('../../../classes/Comments.php');
include_once('../../../dataBase/Collector.php');

class CommentsCollector extends Collector
{
  

   function showComments() {
    $rows = self::$db->getRows("SELECT * FROM comments "); 
  
    $arrayComments= array();  //SE crea el arreglo donde se guardaran los objetos demo      
    foreach ($rows as $c){ //Hace foreach de cada row del fetch de la base

     $user = self::$db->getRows("SELECT username FROM users WHERE id =".$c{'users_id'});
      $username = $user[0]{'username'};


      $aux = new Comments($c{'id'},$c{'email'},$c{'message'},$username); //Crea el nuevo objeto demo
      
      array_push($arrayComments, $aux); 
    }
    return $arrayComments; //Se lo envía a l
     }


//Envia el id para editar el campo en el php

  function showComment($id){
    $row = self::$db->getRows("SELECT * FROM comments WHERE id= ?", array("{$id}"));
    $ObjComments = new Comments($row[0]{'id'}, $row[0]{'email'}, $row[0]{'message'}, $row[0]{'users_id'});
    return $ObjComments;
  }

  function updateComment($id, $email, $message, $users_id){
    $insertrow = self::$db->updateRow("UPDATE public.comments SET email = ?,message = ?,users_id = ?  WHERE id = ? ", array( "{$email}", "{$message}","{$users_id}", $id));
  }


  function deleteComment($id){
    $deleterow = self::$db->deleteRow("DELETE FROM public.comments WHERE id= ?", array("{$id}"));
    
  }

  function createComment($email, $message, $users_id){
    $insertrow = self::$db->insertRow("INSERT INTO public.comments(email, message, users_id) VALUES (?, ?, ?)", array("{$email}", "{$message}", "{$users_id}"));
    }

  }   
?>

