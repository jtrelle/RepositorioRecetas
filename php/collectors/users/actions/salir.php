<?php
	
	session_start();

	if (isset($_SESSION['MiSession'])){
    	session_destroy();
    	//echo "<a href='../../../../index.php'>Volver</a>";
    header("Location: ../../../../index.php");
  	}

  	if (isset($_SESSION['MiAdmin'])){
    	session_destroy();
    	//echo "<a href='../../../../index.php'>Volver</a>";
    header("Location: ../../../index.php");
  	}
?>
