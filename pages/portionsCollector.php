<?php

include_once('portions.php');
include_once('Collector.php');

class PortionsCollector extends Collector
{
  
  function showPortions() {
    $rows = self::$db->getRows("SELECT * FROM portions ");        

    $arrayPortion= array();        
    foreach ($rows as $c){
      $aux = new Portions($c{'id'},$c{'portion'});
      array_push($arrayPortion, $aux);
    }
    return $arrayPortion;        
  }

}
?>

