<?php

session_start();

if (isset($_FILES['file'])) {

include_once("../UserCollector.php");

    $UserCollectorObj = new USerCollector();
    
    $id=$_GET["id"];

  


        $file   = $_FILES['file'];
        // print_r($file);  just checking File properties

        // File Properties
        $file_name  = $file['name'];
        $file_tmp   = $file['tmp_name'];
        $file_size  = $file['size'];
        $file_error = $file['error'];

        // Working With File Extension
        $file_ext   = explode('.', $file_name);
        $file_fname = explode('.', $file_name);

        $file_fname = strtolower(current($file_fname));
        $file_ext   = strtolower(end($file_ext));
        $allowed    = array('png','jpg');



       



        if (in_array($file_ext,$allowed)) {
            //print_r($_FILES);


            if ($file_error === 0) {
                if ($file_size <= 5000000) {
                        $file_name_new     =  $file_fname . uniqid('',true) . '.' . $file_ext;
                        $file_name_new    =  uniqid('',true) . '.' . $file_ext;
                        $file_destination =  '../../../../images/uploads/' . $file_name_new;
                        // echo $file_destination;



                        if (move_uploaded_file($file_tmp, $file_destination)) {
    
                            $imgUploaded = $UserCollectorObj->uploadImg('../images/uploads/'.$file_name_new, $id);
                            echo '<script language="javascript">';
                            echo 'alert("Foto de perfil actualizada");document.location.href="../../../collectors/users/actions/usersCrud.php"';
                            echo '</script>';
                           

                              
                        }
                        else
                        {
                                    echo '<script language="javascript">';
                            echo 'alert("Hubo un error al subir el archivo. Por favor inténtelo más tarde");document.location.href="cambiarFoto.php?id='. $id.'"';
                            echo '</script>';
                        }
//                        
                }
                else
                {
                    echo '<script language="javascript">';
                            echo 'alert("Por favor, suba un archivo menor a 5MB");document.location.href="cambiarFoto.php?id='. $id.'"';
                            echo '</script>';
                }
            }

        }
        else
        {
             echo '<script language="javascript">';
                            echo 'alert("Archivo no válido. Solo .JPG o .PNG");document.location.href="cambiarFoto.php?id='. $id.'"';
                            echo '</script>';
        }
}


?>