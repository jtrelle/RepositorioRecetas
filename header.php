<!DOCTYPE html>
<html  lang="es">

<head>
    <meta name="fragment" content="!" />
    <meta charset="utf-8" />
    <!--<base href="/">-->

    <title>Bienvenido a Choise</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="css/compiled/theme.css">
    <link rel="stylesheet" type="text/css" href="css/vendor/animate.css">
    <link href="css/vendor/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/jquery/jquery-ui.structure.min.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery/jquery-ui.theme.min.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/compiled/ng-img-crop.css">
    <link rel="stylesheet" href="css/compiled/card.css">
    <link rel="stylesheet" href="css/vendor/fade-carousel.css">


    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery/jquery.slides.min.js"></script>
    
    <script src="js/jquery/slick.js"></script>
    <script src="js/jquery/owl.carousel.min.js"></script>
    <script src="js/theme.js"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1" />


    <link rel="stylesheet" type="text/css" href="css/compiled/receta.css">

   
</head>

<body>

    <!--    HEADER      -->

   
    <div id="header" class="terminal-header ">

        <!-- BARRA de Navegacion Large Screen-->
        <div class="regular-header hidden-sm hidden-md hidden-xs">
            <!-- Logo -->
            <div class="comp pull-left" style="margin-top: 8px;">
                <a href="index.php" class="hdr-btn link-reset belo-container">
                    <img alt="" style="width:160px;" src="images/logos/logo.png" />
                </a>
            </div>

            <div class="login-class pull-right">

                <!-- Iniciar Sesion -->
                <div class="comp pull-right  ">
                    <a href="pages/ingresar.php" class="hdr-btn link-reset demo-dialog-open-button login-item">
                    INICIAR SESIÓN
                </a>
                </div>

                <!-- Registro -->
                <div class="comp pull-right  ">
                    <a href="pages/registro.php" data-header-view="true" class="hdr-btn link-reset login-item">
                    REGÍSTRATE
                </a>
                </div>
            </div>

            <!-- Búsqueda -->
<div class="comp pull-right ">
                <div class="hdr-btn link-reset demo-dialog-open-button login-item">
                    <input type="text" class="searchbox " placeholder="Buscar">
                  
                        <button onclick="window.location.href='pages/buscar.php'" type="submit" class="btn-search"> 
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                   

                </div>
            </div>

            <div class="comp pull-left  ">
                <a href="pages/recetas.php" data-header-view="true" class="hdr-btn link-reset menu-item">
                RECETAS
            </a>
            </div>

            <div class="comp pull-left  ">
                <a href="pages/nutricionistas.php" data-header-view="true" class="hdr-btn link-reset menu-item">
                NUTRICIONISTAS
            </a>
            </div>
            <div class="comp pull-left">
                <a href="pages/contacto.php" data-header-view="true" class="hdr-btn link-reset menu-item">
                CONTACTO
            </a>
            </div>


        </div>


        <!-- BARRA DE NAVEGACIÓN Medium / Small Screen -->
        <span class="burger-span hidden-lg"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></span>

        <div class="regular-header burger hidden-lg">
            <!-- Logo -->
            <span class="burger-span exit"><i class="fa fa-times fa-2x" aria-hidden="true"></i></span>

            <div class="comp pull-left" style="margin-top: 8px;">
                <a href="index.php" class="hdr-btn link-reset belo-container">
                    <img alt="" style="width:160px;" src="images/logos/logo.png" />
                </a>
            </div>


            <!--Buscar medio -->
                  <div class="" style="margin-top: 80px; margin-bottom: 40px">
                <div class="hdr-btn link-reset demo-dialog-open-button login-item" style="    text-align: center;">
                    <input type="text" class="searchbox" id="searchbox-medio" placeholder="Buscar">
                    
                         <button onclick="window.location.href='pages/buscar.php'" type="submit" class="btn-search">
                        <i class="fa fa-search" aria-hidden="true" id="searchicon-medio"></i>
                    </button>
                   
                </div>
            </div>

            <div class="comp pull-left">
                <a href="pages/recetas.php" data-header-view="true" class="hdr-btn link-reset menu-item">
                RECETAS
            </a>
            </div>

            <div class="comp pull-left">
                <a href="pages/nutricionistas.php" data-header-view="true" class="hdr-btn link-reset menu-item">
                NUTRICIONISTAS
            </a>
            </div>
            <div class="comp pull-left">
                <a href="pages/contacto.php" data-header-view="true" class="hdr-btn link-reset menu-item">
                CONTACTO
            </a>
            </div>

            <div class="login-class pull-left" style="padding: 2px 0px;">
                <!-- Iniciar Sesion -->
                <div class="comp pull-left">
                    <a href="pages/ingresar.php" class="hdr-btn link-reset demo-dialog-open-button login-item">
                    INICIAR SESIÓN
                </a>
                </div>

                <!-- Registro -->
                <div class="comp pull-left">
                    <a href="pages/registro.php" data-header-view="true" class="hdr-btn link-reset login-item">
                    REGÍSTRATE
                </a>
                </div>
            </div>



        </div>


    </div>

    </body>





</html>