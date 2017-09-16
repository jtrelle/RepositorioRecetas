<?php

include_once('../../../classes/Lists.php');
include_once('../../../dataBase/Collector.php');

class ListCollector extends Collector
{
  
  function showLists() {
    $rows = self::$db->getRows("SELECT * FROM lists "); //Recibe el fetch
							/*Self llama la instancia del objeto para 
							llegar al método getRows:

								class Collector extends dataBase
								{
						  			public static $db;  -->llama a este $db */	        
 

    $arrayLists= array();  //SE crea el arreglo donde se guardaran los objetos demo      
    foreach ($rows as $c){ //Hace foreach de cada row del fetch de la base
      $aux = new Lists($c{'id'},$c{'name'}); //Crea el nuevo objeto demo
      
      array_push($arrayLists, $aux); 
    }
    return $arrayLists; //Se lo envía a la página para que muestre
  }



  //Envia el id para editar el campo en el php

  function showList($id){
    $row = self::$db->getRows("SELECT * FROM lists WHERE id= ?", array("{$id}"));
    $ObjLists = new Lists($row[0]{'id'}, $row[0]{'name'});
    return $ObjLists;
  }

  function updateList($id, $name){
    $insertrow = self::$db->updateRow("UPDATE public.lists SET name = ? WHERE id = ? ", array( "{$name}", $id));
  }

  function deleteList($id){
    $deleterow = self::$db->deleteRow("DELETE FROM public.lists WHERE id= ?", array("{$id}"));
    
  }

  function createList($name){
    $insertrow = self::$db->insertRow("INSERT INTO public.lists(name) VALUES (?)", array("{$name}"));
  }  

}
?>
