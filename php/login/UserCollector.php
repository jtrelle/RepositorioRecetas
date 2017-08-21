<?php

include_once('Users.php');
include_once('Collector.php');

class UserCollector extends Collector
{
  
  function showUsers() {
    $rows = self::$db->getRows("SELECT * FROM users "); //Recibe el fetch
							/*Self llama la instancia del objeto para 
							llegar al método getRows:

								class Collector extends dataBase
								{
						  			public static $db;  -->llama a este $db */	        
 
   echo "linea 1";
    $arrayUsers= array();  //SE crea el arreglo donde se guardaran los objetos demo      
    foreach ($rows as $c){ //Hace foreach de cada row del fetch de la base
      $aux = new Users($c{'id'},$c{'username'}, $c{'password'}, $c{'people_id'}); //Crea el nuevo objeto demo
      array_push($arrayUsers, $aux); 
    }
    return $arrayUsers; //Se lo envía a la página para que muestre
  }


  function login($username, $password){
    session_start();

    if (!empty($_POST['user'])) {





  $row = self::$db->getRows("SELECT * FROM users as u WHERE u.username = '". $username . "' AND u.password = '" . $password . "' OR (SELECT email FROM people WHERE id = u.people_id) = '". $username . "' AND u.password = '" . $password . "'");


      if (!empty($row)) {
        return true;
      }
      else{
        return false;
      }
}

  }

}
?>

