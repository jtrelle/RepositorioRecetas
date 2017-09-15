<?php
  session_start();
  if (isset($_SESSION['MiAdmin'])){
    session_destroy();
    echo '<script language="javascript">';
      echo 'alert("Se cerrará su sesión de Administrador para  que pueda usar este formulario");document.location.href="registro.php"';
      echo '</script>';

  }




?>



<!DOCTYPE html>
<html >
<head>
  <meta name="fragment" content="!"/>
    <meta charset="utf-8"/>
  <title>Registro</title>

    <link rel="stylesheet" href="../css/styleLogin.css">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="../css/compiled/theme.css">
    <link rel="stylesheet" type="text/css" href="../css/vendor/animate.css">
    <link href="../css/vendor/font-awesome.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="../css/jquery/jquery-ui.structure.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/jquery/jquery-ui.theme.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/jquery/owl.carousel.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/jquery/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="../css/compiled/ng-img-crop.css">
    <link rel="stylesheet" href="../css/compiled/card.css">
    <link rel="stylesheet" href="../css/jquery/font-awesome.min.css">

    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/jquery/jquery.slides.min.js"></script>
    <script src="../js/jquery/slick.js"></script>
    <script src="../js/jquery/owl.carousel.min.js"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1"/>    
  
    
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">    
    
</head>

<body>
    
<div id="header" class="terminal-header ">




    <!-- BARRA de Navegacion -->
    <header class="regular-header clearfix hide-sm hide-xs" id="new-header">
        <!-- Logo -->
        <div class="comp pull-left" style="margin-top: 8px;">
            <a href="../index.php" class="hdr-btn link-reset belo-container">
                <img style="width:160px;" src="../images/logo.png" alt="Flowers"/>
            </a>
        </div>







        <div class="login-class pull-right">

            <!-- Iniciar Sesion -->
            <div class="comp pull-right  ">
                <a href="ingresar.php" class="hdr-btn link-reset demo-dialog-open-button login-item">
                    INICIAR SESIÓN
                </a>
            </div>

            <!-- Registro -->
            <div  class="comp pull-right  ">
                <a href="registro.php" data-header-view="true" class="hdr-btn link-reset login-item">
                    REGÍSTRATE
                </a>
            </div>
        </div>

    </header>
</div>    
    
  <form action="../php/collectors/users/actions/createUser.php" method="POST" class="estructura">

        <div id="signup">   
          <h1 class="texto">Registrate gratis</h1>
          
          <div class="estructurados">
          
         
            <div class="field-wrap">
              <label>
                Nombre<span class="req">*</span>
              </label>
              <input class="inputre" name="fname" type="text" required autocomplete="off" />
            </div>
        
           
        

           <div class="field-wrap">
              <label>
                Apellido<span class="req">*</span>
              </label>
              <input class="inputre" name="lname" type="text" required autocomplete="off"/>
            </div>

          <div class="field-wrap">
            <label>
              Email <span class="req">*</span>
            </label>
            <input class="inputre" name="email" type="email" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Usuario<span class="req">*</span>
            </label>
            <input class="inputre" name="user" type="text" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Contraseña<span class="req">*</span>
            </label>
            <input class="inputre" name="pass" type="password" required autocomplete="off"/>
          </div>
          <div class="field-wrap">
            <label>
              Repita la contraseña<span class="req">*</span>
            </label>
            <input class="inputre" name="pass2" type="password" required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block">EMPEZAR</button>
           
          </div>

        </div>
          
      
</form> <!-- /form -->
   <script src="../js/bootstrap/bootstrap.min.js"></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


</body>
</html>

