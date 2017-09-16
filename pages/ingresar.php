
<?php
  session_start();
  if (isset($_SESSION['MiAdmin'])){
   session_destroy();
    echo '<script language="javascript">';
      echo 'alert("Se cerrará su sesión de Administrador para que ingrese como Usuario");document.location.href="ingresar.php"';
      echo '</script>';

  }




?>



<!DOCTYPE html>
<html >
<head>
  <meta name="fragment" content="!"/>
    <meta charset="utf-8"/>
  <title>Login</title>

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
    <!-- Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>

    <!-- Angular Material Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.js"></script>

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
            <a href="../index.html" class="hdr-btn link-reset belo-container">
                <img style="width:160px;" src="../images/logos/logo.png" alt="Flowers"/>
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
    


  <div class="container">
  <h2>Vertical (basic) form</h2>




    <form action="../php/collectors/users/actions/login.php" method="POST"> <!-- manda el modo POST a la página LOGIN.PHP -->
    <fieldset>
         <div class="estructura">
      
        <div id="login">   
          <h1 class="texto">Bienvenido de nuevo!</h1>
          
          <div class="estructurados">
          
            <div class="field-wrap">
            <label>
              Email
            </label>
            <input class="inputre" type="text" name="user" required autocomplete="true" placeholder="Ingrese su usuario o email" />
          </div>
          
          <div class="field-wrap">
            <label>
              Contraseña<span class="req">*</span>
            </label>
            <input class="inputre" type="password" name="password" placeholder="Contraseña" required autocomplete="off"/>
          </div>
          
          <!--<p class="forgot"><a href="#" class="letra">Forgot Password?</a></p>-->
          
          <button type="submit" class="button button-block">Iniciar sesión</button>
          
          </div>

        </div>  

  </fieldset>

      
    </div> <!-- /form -->




      <!-- <fieldset>
        <label>User:</label>
           <input type="text" name="user">
        <label>Password:</label>
           <input type="password" name="password">
     <button type="submit">Submit</button>
     </fieldset> -->
    </form> 
    </div>


    
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  

</body>
</html>