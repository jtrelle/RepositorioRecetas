<?php
	
	session_start();

	if (isset($_SESSION['MiSession'])){
    	session_destroy();
    	header("Location:../../index.php");
  	}
?>
