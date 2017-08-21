<?php

include_once('lists.php');
include_once('Collector.php');

class ListsCollector extends Collector
{
  
  function showLists() {
    $rows = self::$db->getRows("SELECT * FROM lists ");        

    $arrayList= array();        
    foreach ($rows as $c){
      $aux = new Lists($c{'id'},$c{'name'});
      array_push($arrayList, $aux);
    }
    return $arrayList;        
  }

}
?>

