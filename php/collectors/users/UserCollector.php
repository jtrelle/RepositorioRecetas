<?php

include_once('../../../classes/Users.php');
include_once('../../../classes/People.php');
include_once('../../../classes/Roles_user.php');
include_once('../../../dataBase/Collector.php');

class UserCollector extends Collector
{
  
  function showUsers() {
    $rows = self::$db->getRows("SELECT * FROM users"); //Recibe el fetch
							/*Self llama la instancia del objeto para 
							llegar al método getRows:

								class Collector extends dataBase
								{
						  			public static $db;  -->llama a este $db */	 
    
    $arrayUsers= array();  //SE crea el arreglo donde se guardaran los objetos demo      
    foreach ($rows as $c){ //Hace foreach de cada row del fetch de la base
      $people = self::$db->getRows("SELECT name, surname FROM people WHERE id =".$c{'people_id'});
      $nombre = $people[0]{'name'}." ".$people[0]{'surname'};


      $rol = self::$db->getRows("SELECT roles_id FROM roles_users WHERE users_id =". $c{'id'});
      $r =   $rol[0]{'roles_id'};

      $rol_name =  self::$db->getRows("SELECT role FROM roles WHERE id =". $r); 

      $aux = new Users(); //Crea el nuevo objeto demo
      $aux->setIdUsers($c{'id'});
      $aux->setUsername($c{'username'});
      $aux->setUserPassword($c{'password'});
      $aux->setUserPeopleId($c{'people_id'});
      $aux->setUserImage($c{'image'});
      $aux->setUserNombre($nombre);
      $aux->setUserRol($rol_name[0]{'role'});
      

      array_push($arrayUsers, $aux); 
    }
    return $arrayUsers; //Se lo envía a la página para que muestre
  }












function showPersonas() {
    $rows = self::$db->getRows("SELECT * FROM people"); //Recibe el fetch
   
    $arrayPeople= array();  //SE crea el arreglo donde se guardaran los objetos demo      
    foreach ($rows as $c){ //Hace foreach de cada row del fetch de la base

      $aux = new People($c{'name'}, $c{'surname'}, $c{'email'}); //Crea el nuevo objeto demo
      $aux->setIdPeople($c{'id'});
   
    
      array_push($arrayPeople, $aux); 
    }
    return $arrayPeople; //Se lo envía a la página para que muestre
  }








function showRolesUsers() {
    $rows = self::$db->getRows("SELECT * FROM roles_users"); //Recibe el fetch
   
    $arrayRolesUsers= array();  //SE crea el arreglo donde se guardaran los objetos demo      
    foreach ($rows as $c){ //Hace foreach de cada row del fetch de la base

      $role = self::$db->getRows("SELECT role FROM roles WHERE id=".$c{'roles_id'});
      $r = $role[0]{'role'};

      $user = self::$db->getRows("SELECT username FROM users WHERE id=".$c{'users_id'});
      $u = $user[0]{'username'};


      $aux = new RolesUser(); //Crea el nuevo objeto demo
      $aux.setId($c{'id'});
      $aux.setFkRoles($r);
      $aux.setFkUsers($u);
 
   
    
      array_push($arrayRolesUsers, $aux); 
    }
    return $arrayRolesUsers; //Se lo envía a la página para que muestre
  }




function fillCombo(){
    $rows = self::$db->getRows("SELECT * FROM roles");

     $arrayRolesUsers= array(); 

    foreach ($rows as $c){ 
      $aux = new Rol($c{'id'}, $c{'role'});
  
 
   
    
      array_push($arrayRolesUsers, $aux); 
    }
    return $arrayRolesUsers;
}














  function showPeople($idPeople){
  $row = self::$db->getRows("SELECT name, surname, email FROM people WHERE id ='" .$idPeople. "'");

  $objPeople = new People($row[0]{'name'}, $row[0]{'surname'}, $row[0]{'email'});
  return $objPeople;
  }








  function actualizarPeople($id, $name, $surname, $email){
    $insertrow = self::$db->updateRow("UPDATE public.people SET name = ?, surname = ?, email = ? WHERE id = ? ", array( "{$name}", "{$surname}", "{$email}" ,$id));
  }







  function showUser($idUser){
  $row = self::$db->getRows("SELECT username, password FROM users WHERE id ='" .$idUser. "'");

  $objUser = new Users(); 
  $objUser->setUsername($row[0]{'username'});
  $objUser->setUserPassword($row[0]{'password'});
  
       

  return $objUser;
  }




  function actualizarUser($id, $username, $password, $password2){

    if ($password === $password2) {

       $usernameVal = self::$db->getRows("SELECT * FROM users WHERE username = '". $username . "'");
      
 




      if (!empty($usernameVal)) { //Si ya existe el usuario

          if (($usernameVal[0]{'id'} === $id) &&  ($usernameVal[0]{'password'} === $password)) {
             $error = "same";
            return $error;
          }elseif (($usernameVal[0]{'id'} === $id) &&  ($usernameVal[0]{'password'} !== $password)) {
            $insertrow = self::$db->updateRow("UPDATE public.users SET username = ?, password = ? WHERE id = ? ", array( "{$username}", "{$password}" ,$id));
             $error = "ok";
        return $error;
          }
          else{
             $error = "user";
        return $error;
          }


       
      }
      else{
       $insertrow = self::$db->updateRow("UPDATE public.users SET username = ?, password = ? WHERE id = ? ", array( "{$username}", "{$password}" ,$id));
       $error = "ok";
        return $error;
      

     }

    }
    else{

      $error = "bad";
        return $error;

    }

   
  }















  function editUser($id, $username, $password){

     $usernameVal = self::$db->getRows("SELECT * FROM users WHERE username = '". $username . "'");
    

    $i = $usernameVal[0]{'id'};
    $u = $usernameVal[0]{'username'};
    $p = $usernameVal[0]{'password'};

      if (!empty($usernameVal)) { //Si ya existe el usuario

          if (($u == $id) &&  ($u == $username) && ($p == $password)) {

             $error = "same";
            return $error;
          }

          elseif (($p != $password) ||  ($u != $username)) {

            $insertrow = self::$db->updateRow("UPDATE public.users SET username = ?, password = ? WHERE id = ? ", array( "{$username}", "{$password}" ,$id));
             $error = "ok";
              return $error;
          }
          else{
             $error = "user";
              return $error;
          }


       
      }
      else{
       $insertrow = self::$db->updateRow("UPDATE public.users SET username = ?, password = ? WHERE id = ? ", array( "{$username}", "{$password}" ,$id));
       $error = "ok";
        return $error;
      

     }


   
  }






















/*

function uptadeUser($idU, $idP, $username, $password, $name, $surname, $email){
   $insertrow = self::$db->updateRow("UPDATE public.users SET username = ?, password = ? WHERE id = ? ", array( "{$username}", "{$password}" ,$idU));

   $insertrow = self::$db->updateRow("UPDATE public.people SET name = ?, surname = ?, email = ? WHERE id = ? ", array( "{$name}", "{$surname}", "{$email}" ,$idP));
       
}
*/
















  function login($username, $password){
    if (!empty($_POST['user'])) {
      $row = self::$db->getRows("SELECT * FROM users as u WHERE u.username = '". $username . "' AND u.password = '" . $password . "' OR (SELECT email FROM people WHERE id = u.people_id) = '". $username . "' AND u.password = '" . $password . "'");
        
      if (!empty($row)) {
         $idUser = '';
         $idPeople = '';
           foreach ($row as $c){ 
            $idUser = $c{'id'};
            $idPeople = $c{'people_id'};
            }
        
          $nombre = self::$db->getRows("SELECT u.id, u.people_id, u.username, u.password, u.image, name, surname, email, r.roles_id FROM users as u, people AS p, roles_users AS r WHERE people_id ='" .$idPeople. "' AND p.id ='" .$idPeople."' AND r.users_id ='".$idUser."'");

          if ($nombre[0]{'roles_id'} == 1) {

              $error = "admin";
              return $error;
          }


        
          return $nombre;
      }
      else{
        $error = "bad";
              return $error;
      }
    }

  }












function loginAdmin($username, $password){

  if (!empty($_POST['user'])) {
      $row = self::$db->getRows("SELECT * FROM users as u WHERE u.username = '". $username . "' AND u.password = '" . $password . "' OR (SELECT email FROM people WHERE id = u.people_id) = '". $username . "' AND u.password = '" . $password . "'");
        

        //return $row;
      if (!empty($row)) {
         $idUser = '';
         $idPeople = '';
           foreach ($row as $c){ 
            $idUser = $c{'id'};
            $idPeople = $c{'people_id'};
        }
        
          $nombre = self::$db->getRows("SELECT u.id, name, surname, email, r.roles_id  FROM users as u, people AS p, roles_users AS r WHERE people_id ='" .$idPeople. "' AND p.id ='" .$idPeople."' AND r.users_id ='".$idUser."'");

           if ($nombre[0]{'roles_id'} == 2) {

              $error = "user";
              return $error;
          }

        
          return $nombre;
      }
      else{
              $error = "bad";    
              return $error;
      }
}
}













function registrarse($nombre, $apellido, $email, $usuario, $pass1, $pass2){

 
$error = "";

    if ($pass1 === $pass2) {//Si validación de contraseña es correcta
      $usernameVal = self::$db->getRows("SELECT * FROM users WHERE username = '". $usuario . "'");
      $emailVal = self::$db->getRows("SELECT * FROM people WHERE email = '". $email . "'");

      if (!empty($usernameVal)) { //Si ya existe el usuario
        $error = "user";
        return $error;
      }

      if (!empty($emailVal)) { //Si ya existe el correo
        $error = "email";
        return $error;
      }else{

         $insertrow = self::$db->insertRow("INSERT INTO public.people(name, surname, email) VALUES (?, ?, ?)", array("{$nombre}", "{$apellido}", "{$email}"));

          $p_id = self::$db->getRows("SELECT id FROM people WHERE email = '". $email . "'");

          $fkuser = $p_id[0]['id'];

          $insertrow = self::$db->insertRow("INSERT INTO public.users(username, password, people_id, image) VALUES (?, ?, ?, '../images/default-avatar.png')", array($usuario, "{$pass1}", $fkuser));

          $u_id = self::$db->getRows("SELECT id FROM users WHERE username = '". $usuario . "'");

          $userid = $u_id[0]['id'];

           $insertrow = self::$db->insertRow("INSERT INTO public.roles_users(roles_id, users_id) VALUES (2, ?)", array($userid));

          $error = "ok";
          return $error;

      }

    }
    else{ 
      $error = "pass";
      return $error;

    }//end else
  }//End registrarse
























function crearUser($nombre, $apellido, $email, $usuario, $pass1){

 
$error = "";



    $usernameVal = self::$db->getRows("SELECT * FROM users WHERE username = '". $usuario . "'");
      $emailVal = self::$db->getRows("SELECT * FROM people WHERE email = '". $email . "'");

      if (!empty($usernameVal)) { //Si ya existe el usuario
        $error = "user";
        return $error;
      }

      if (!empty($emailVal)) { //Si ya existe el correo
        $error = "email";
        return $error;
      }else{

         $insertrow = self::$db->insertRow("INSERT INTO public.people(name, surname, email) VALUES (?, ?, ?)", array("{$nombre}", "{$apellido}", "{$email}"));

          $p_id = self::$db->getRows("SELECT id FROM people WHERE email = '". $email . "'");

          $fkuser = $p_id[0]['id'];

          $insertrow = self::$db->insertRow("INSERT INTO public.users(username, password, people_id, image) VALUES (?, ?, ?, '../images/default-avatar.png')", array($usuario, "{$pass1}", $fkuser));

          $u_id = self::$db->getRows("SELECT id FROM users WHERE username = '". $usuario . "'");

          $userid = $u_id[0]['id'];

           $insertrow = self::$db->insertRow("INSERT INTO public.roles_users(roles_id, users_id) VALUES (2, ?)", array($userid));

          $error = "ok";
          return $error;

      }

 
  }//End crearUser


















function uploadImg  ($img, $id){

          $insertrow = self::$db->updateRow("UPDATE public.users SET image = ? WHERE id = ? ", array($img, $id));

        //  $insertrow = self::$db->insertRow("INSERT INTO public.users(image) VALUES (?) WHERE id = 1", array(pg_escape_bytea($img)));


           $row = self::$db->getRows("SELECT image FROM users WHERE id = ?", array($id));
           
          return $row;
         

    
  }//End uploadImg









function cambiarRol($id){

   $row = self::$db->getRows("SELECT * FROM roles_users WHERE users_id = ?", array($id));

   $rolId = $row[0]{'roles_id'}; 
   $r =  $row[0]{'id'};

   if ($rolId === 1) {
      $insertrow = self::$db->updateRow("UPDATE public.roles_users SET roles_id = 2 WHERE id = ? ", array($r));
   }
   else{
    $insertrow = self::$db->updateRow("UPDATE public.roles_users SET roles_id = 1 WHERE id = ? ", array($r));
   }


}//End deleteUser

















function deleteUser($id){

$row = self::$db->getRows("SELECT * FROM users WHERE id = ?", array($id));


$deleterow = self::$db->deleteRow("DELETE FROM public.roles_users WHERE users_id= ?", array("{$id}"));
$deleterow = self::$db->deleteRow("DELETE FROM public.users WHERE id= ?", array("{$id}"));
$deleterow = self::$db->deleteRow("DELETE FROM public.people WHERE id= ?", array($row[0]{'people_id'}));
}//End deleteUser






}
?>
