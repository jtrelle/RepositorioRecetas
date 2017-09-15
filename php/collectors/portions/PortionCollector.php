<?php

include_once('../../../classes/Portions.php');
include_once('../../../dataBase/Collector.php');

class PortionCollector extends Collector
{
  
  function showPortions() {
    $rows = self::$db->getRows("SELECT * FROM portions "); //Recibe el fetch
							/*Self llama la instancia del objeto para 
							llegar al método getRows:

								class Collector extends dataBase
								{
						  			public static $db;  -->llama a este $db */	        
 
   echo "linea 1";
    $arrayPortions= array();  //SE crea el arreglo donde se guardaran los objetos demo      
    foreach ($rows as $c){ //Hace foreach de cada row del fetch de la base
      $aux = new Portions($c{'id'},$c{'portion'}); //Crea el nuevo objeto demo
      
      array_push($arrayPortions, $aux); 
    }
    return $arrayPortions; //Se lo envía a la página para que muestre
  }



  //Envia el id para editar el campo en el php

  function showPortion($id){
    $row = self::$db->getRows("SELECT * FROM portions WHERE id= ?", array("{$id}"));
    $ObjPortions = new Portions($row[0]{'id'}, $row[0]{'portion'});
    return $ObjPortions;
  }

  function updatePortion($id, $portion){
    $insertrow = self::$db->updateRow("UPDATE public.portions SET portion = ? WHERE id = ? ", array( "{$portion}", $id));
  }

  function deletePortion($id){
    $deleterow = self::$db->deleteRow("DELETE FROM public.portions WHERE id= ?", array("{$id}"));
  }

  function createPortion($portion){
    $insertrow = self::$db->insertRow("INSERT INTO public.portions(portion) VALUES (?)", array("{$portion}"));
  }  

}
?>
