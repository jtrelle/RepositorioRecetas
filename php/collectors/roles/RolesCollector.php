<?php

include_once('../../../classes/Roles.php');
include_once('../../../dataBase/Collector.php');

class RolesCollector extends Collector
{
  

   function showRoles() {
    $rows = self::$db->getRows("SELECT * FROM roles "); 
  
    $arrayRoles= array();  //SE crea el arreglo donde se guardaran los objetos demo      
    foreach ($rows as $c){ //Hace foreach de cada row del fetch de la base
      $aux = new Roles($c{'id'},$c{'role'}); //Crea el nuevo objeto demo
      
      array_push($arrayRoles, $aux); 
    }
    return $arrayRoles; //Se lo envía a l
     }


     function showRole($id){
    $row = self::$db->getRows("SELECT * FROM roles WHERE id= ?", array("{$id}"));
    $ObjRoles = new Roles($row[0]{'id'}, $row[0]{'role'});
    return $ObjRoles;
  }

  function updateRole($id, $role){
    $insertrow = self::$db->updateRow("UPDATE public.roles SET role = ?  WHERE id = ? ", array( "{$role}", $id));
  }


  function deleteRole($id){
    $deleterow = self::$db->deleteRow("DELETE FROM public.roles WHERE id= ?", array("{$id}"));
    
  }

  function createRole($role){
    $insertrow = self::$db->insertRow("INSERT INTO public.roles(role) VALUES (?)", array("{$role}"));
    }




  }   
?>

