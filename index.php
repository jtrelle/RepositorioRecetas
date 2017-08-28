<?php
session_start();
?>

<html>
<head>

<title>sesion php cookie</title>
<script type="text/javascript" src="js/java.js"></script>

</head>

<body>


<h1>BIENVENIDOS</h1>


<aside>
<?php
include_once("CommentsCollector.php");//incluye el demoCollector solo una vez

$id =1;

$CommentsCollectorObj = new CommentsCollector();

foreach ($CommentsCollectorObj->showComments() as $c){
  echo "<div>";
  echo $c->getId() . "    -       " .$c->getEmail();    
                  
  echo "</div>"; 
}






?>


</aside>



</body>
</html>
