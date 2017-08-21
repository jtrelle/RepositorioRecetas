<?php

include_once('Collector.php');
include_once('Comments.php');

class CommentsCollector extends Collector
{
  
  function showComments() {
    $rows = self::$db->getRows("SELECT * FROM comments");    //arreglo de objetos bidimensionales    
    echo "linea 1";
    $arrayComments= array();        
    foreach ($rows as $c){  //Objeto demo
      $aux = new comments$c{'id'},$c{'email'},$c{'message'},$c{'user_id'}); //Crea un objeto demo
      array_push($arrayComments, $aux); //Guarda una coleccion de demo
    }
    return $arrayComments;        
  }

  
}
?>

