<?php

include_once('../../../classes/Illness.php');
include_once('../../../dataBase/Collector.php');

class IllnessCollector extends Collector
{
  
  function showsIllness() {
    $rows = self::$db->getRows("SELECT * FROM illness ");    //arreglo de objetos bidimensionales    
   
    $arrayIllness= array();        
    foreach ($rows as $c){  //Objeto illness
      $aux = new Illness($c{'id'},$c{'name'}); //Crea un objeto illness
      array_push($arrayIllness, $aux); //Guarda una coleccion de demo
    }
    return $arrayIllness;        
  }

  #Envia el id para editar el campo en el php

  function showIllness($id){
    $row = self::$db->getRows("SELECT * FROM illness WHERE id= ?", array("{$id}"));
    $ObjIllness = new Illness($row[0]{'id'}, $row[0]{'name'});
    return $ObjIllness;
  }

  function updateIllness($id, $name){
    $insertrow = self::$db->updateRow("UPDATE public.illness SET name = ? WHERE id = ? ", array( "{$name}", $id));
  }

  function deleteIllness($id){
    $deleterow = self::$db->deleteRow("DELETE FROM public.illness_recipes WHERE illness_id= ?", array("{$id}"));
    
    $deleterow = self::$db->deleteRow("DELETE FROM public.illness WHERE id= ?", array("{$id}"));
    
  }

  function createIllness($name){
    $insertrow = self::$db->insertRow("INSERT INTO public.illness(name) VALUES (?)", array("{$name}"));
  }

}
?>
