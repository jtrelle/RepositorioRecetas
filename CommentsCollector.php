<?php

include_once('Comments.php');
include_once('Collector.php');


class CommentsCollector extends Collector
{
  
  function showComments() {
    $rows = self::$db->getRows("SELECT * FROM comments ");    //arreglo de objetos bidimensionales    
    
    $arrayComments= array();        
    foreach ($rows as $c){  //Objeto demo
      $aux = new Comments($c{'id'},$c{'email'},$c{'message'},$c{'usersid'}); //Crea un objeto demo
      array_push($arrayComments, $aux); //Guarda una coleccion de demo
    }
    return $arrayComments;        
  }

  
   function deleteComments($id){
    $deleterow = self::$db->deleteRow
    ("DELETE FROM public.demo WHERE iddemo= ?", array("{$id}"));

  }

}
?>

