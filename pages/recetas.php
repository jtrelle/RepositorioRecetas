<?php
  session_start();
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta name="fragment" content="!" />
        <meta charset="utf-8" />
        <!--<base href="/">-->

        <title>Bienvenido a Choice</title>

        <!-- Stylesheets -->
        <link rel="stylesheet" type="text/css" href="../css/compiled/theme.css">
    <link rel="stylesheet" type="text/css" href="../css/vendor/animate.css">
    <link rel="stylesheet" type="text/css" href="../css/compiled/receta.css">
    <link href="../css/vendor/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../css/jquery/jquery-ui.structure.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/jquery/jquery-ui.theme.min.css" />


    
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/jquery/jquery.slides.min.js"></script>
   
    <script src="../js/jquery/slick.js"></script>
    <script src="../js/jquery/owl.carousel.min.js"></script>
    <script src="../js/theme.js"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1" />
    </head>

    <body>



<?php

    if (isset($_SESSION['MiAdmin'])){
?>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="../php/admin/adminhome.php">Administracion</a>
          <a class="navbar-brand" href="../index.php">Choice Home</a>
        </div>
        <ul class="nav navbar-nav navbar-right">


 <?php 

  echo "<li><p class='navbar-brand'> Bienvenido Usuario: " . $_SESSION['MiAdmin'] . "</p></li>";
  echo "<li><a href='../php/collectors/users/actions/salir.php'><span class='glyphicon glyphicon-log-out'></span> Salir </a></li>";
  echo "</ul>";
  echo "</div>";
  echo "</nav>";   
       
    }  



 


?>




        <!--    HEADER    -->


        <div id="header" class="terminal-header ">
   
    
            <!-- BARRA de Navegacion Large Screen-->
            <div class="regular-header hidden-sm hidden-md hidden-xs">
                <!-- Logo -->
                <div class="comp pull-left" style="margin-top: 8px;">
                    <a href="../index.php" class="hdr-btn link-reset belo-container">
                        <img alt="" style="width:160px;" src="../images/logos/logo.png" />
                    </a>
                </div>




                <?php
                  if (isset($_SESSION['MiSession'])){
                     
                     
                
                ?>

                    <div class="login-class pull-right">

                        <div class="comp pull-right  ">

                            <?php
                                echo "<a href='../php/collectors/users/actions/salir.php' class='hdr-btn link-reset demo-dialog-open-button login-item'>Salir</a> ";
                            ?>

                        </div>


                        <!-- UER -->
                        <div class="comp pull-right  ">

                            <?php 
                      echo "<a href='../pages/profile.php' class='hdr-btn link-reset demo-dialog-open-button login-item'>".$_SESSION['MiSession']."</a> "; 
                    ?>

                        </div>




                    </div>




                    <?php
    
    }
           

  
  else {

?>
                        <div class="login-class pull-right">

                            <!-- Iniciar Sesion -->
                            <div class="comp pull-right  ">
                                <a href="../pages/ingresar.php" class="hdr-btn link-reset demo-dialog-open-button login-item">
                    INICIAR SESIÓN
                </a>
                            </div>

                            <!-- Registro -->
                            <div class="comp pull-right  ">
                                <a href="../pages/registro.php" data-header-view="true" class="hdr-btn link-reset login-item">
                    REGÍSTRATE
                </a>
                            </div>
                        </div>



                        <?php } ?>






                            <!-- Búsqueda -->
             

                            <div class="comp pull-left  ">
                                <a href="../pages/recetas.php" data-header-view="true" class="hdr-btn link-reset menu-item">
                RECETAS
            </a>
                            </div>

                            <div class="comp pull-left  ">
                                <a href="../pages/nutricionistas.php" data-header-view="true" class="hdr-btn link-reset menu-item">
                NUTRICIONISTAS
            </a>
                            </div>
                            <div class="comp pull-left">
                                <a href="../pages/contacto.php" data-header-view="true" class="hdr-btn link-reset menu-item">
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
                    <a href="../index.php" class="hdr-btn link-reset belo-container">
                        <img alt="" style="width:160px;" src="../images/logos/logo.png" />
                    </a>
                </div>


                <!--Buscar medio -->
                
                <div class="comp pull-left">
                    <a href="../pages/recetas.php" data-header-view="true" class="hdr-btn link-reset menu-item">
                RECETAS
            </a>
                </div>

                <div class="comp pull-left">
                    <a href="../pages/nutricionistas.php" data-header-view="true" class="hdr-btn link-reset menu-item">
                NUTRICIONISTAS
            </a>
                </div>
                <div class="comp pull-left">
                    <a href="../pages/contacto.php" data-header-view="true" class="hdr-btn link-reset menu-item">
                CONTACTO
            </a>
                </div>




                  <?php
                  if (isset($_SESSION['MiSession'])){
                     ?>

                        <div class="login-class pull-left" style="padding: 2px 0px;">
                    <!-- Iniciar Sesion -->
                            <div class="comp pull-left">
                                 <?php
                                echo "<a href='../php/collectors/users/actions/salir.php' class='hdr-btn link-reset demo-dialog-open-button login-item'>Salir</a> ";
                            ?>
                            </div>

                            <!-- Registro -->
                            <div class="comp pull-left">
                                 <?php 
                      echo "<a href='../pages/profile.php' class='hdr-btn link-reset demo-dialog-open-button login-item'>".$_SESSION['MiSession']."</a> "; 
                    ?>
                            </div>
                        </div>
 <?php
                     
                    }
                    else {

                    ?>
                         <div class="login-class pull-left" style="padding: 2px 0px;">
                    <!-- Iniciar Sesion -->
                            <div class="comp pull-left">
                                <a href="../pages/ingresar.php" class="hdr-btn link-reset demo-dialog-open-button login-item">
                            INICIAR SESIÓN
                        </a>
                            </div>

                            <!-- Registro -->
                            <div class="comp pull-left">
                                <a href="../pages/registro.php" data-header-view="true" class="hdr-btn link-reset login-item">
                            REGÍSTRATE
                        </a>
                            </div>
                        </div>

                  <?php       
                     } 
                
                ?>



            </div>


        </div>

    <!--       *******  BODY    *******     -->


    <div>



        <section class="container" style="padding: 30px 0px;background-color: white;">
            <div class="row" >
                
        <div class="col-md-12 col-xs-12" style="padding: 50px">
                        <h3 class="title-color">SOPAS</h3>
                        <div class="col-md-4 col-sm-6 col-xs-12 " style="padding-top: 15px">
                            <div class="container-receta">
                                <div class="bg-containerDiabeticos">
                                    <div class="container-receta-img">
                                        <img class="img-responsive" src="../images/recetall/caldopollo2.jpg" alt=" ">
                                    </div>
                                </div>
                                <div class="recetas-contenido title-color">
                                    <h4><strong> SOPA DE POLLO </strong></h4>
                                    <p>Esta receta que prepararemos para que consuman todos las personas que padecen de diabetes.</p>
                                    <div class="receta-btn"><a href="diabetes_caldo_de_pollo.php">VER MÁS</a></div>
                                </div>


                            </div>
                        </div>
                        
                         <div class="col-md-4 col-sm-6 col-xs-12 " style="padding-top: 15px">
                            <div class="container-receta">
                                <div class="bg-containerGastritis">
                                    <div class="container-receta-img">
                                        <img class="img-responsive" src="../images/recetall/sopacalabazas.jpg" alt=" ">
                                    </div>
                                </div>
                                <div class="recetas-contenido title-color">
                                    <h4><strong>SOPA DE CALABAZA Y CHAMPIÑONES</strong></h4>
                                    <p>La calabaza es buena para combatir la gastritis, te saca el ardor del esófago y se te van las ganas de vomitar bilis</p>
                                    <div class="receta-btn"><a href="gastritis_calabaza_y_champinones.php">VER MÁS</a></div>
                                </div>


                            </div>
                        </div>
                        
                        
                        
                        <div class="col-md-4 col-sm-6 col-xs-12 " style="padding-top: 15px">
                            <div class="container-receta">
                                <div class="bg-containerHipertensos">
                                    <div class="container-receta-img">
                                        <img class="img-responsive" src="../images/recetall/sopatomate.jpg" alt=" ">
                                    </div>
                                </div>
                                <div class="recetas-contenido title-color">
                                    <h4><strong>SOPA DE TOMATE</strong></h4>
                                    <p>La acción diurética del tomate son muy recomendables para aquellas personas que padecen hipertensión arterial</p>
                                    <div class="receta-btn"><a href="#">VER MÁS</a></div>
                                </div>


                            </div>
                        </div>
                       
                        <div class="col-md-4 col-sm-6 col-xs-12 " style="padding-top: 15px">
                            <div class="container-receta">
                                <div class="bg-containerGastritis">
                                    <div class="container-receta-img">
                                        <img class="img-responsive" src="../images/recetall/sopaespinca.jpg" alt=" ">
                                    </div>
                                </div>
                                <div class="recetas-contenido title-color">
                                    <h4><strong>SOPA DE ESPINACAS CON PAPAS</strong></h4>
                                    <p>Las papa y la espinaca son verduras que poseen una variedad de vitaminas que ayuda estimular el sistema digestivo.</p>
                                    <div class="receta-btn"><a href="#">VER MÁS</a></div>
                                </div>


                            </div>
                        </div>
                        
                        <div class="col-md-4 col-sm-6 col-xs-12 " style="padding-top: 15px">
                            <div class="container-receta">
                                <div class="bg-containerHipertensos">
                                    <div class="container-receta-img">
                                        <img class="img-responsive" src="../images/recetall/cremazanahoria.jpg" alt=" ">
                                    </div>
                                </div>
                                <div class="recetas-contenido title-color">
                                    <h4><strong>CREMA DE ZANAHORIA</strong></h4>
                                    <p>El consumo frecuente de estos alimentos provoca vasodilatación por lo que favorece la disminución de la presión arterial.</p>
                                    <div class="receta-btn"><a href="#">VER MÁS</a></div>
                                </div>


                            </div>
                        </div>
                        
                        
                        <div class="col-md-4 col-sm-6 col-xs-12 " style="padding-top: 15px">
                            <div class="container-receta">
                                <div class="bg-containerDiabeticos">
                                    <div class="container-receta-img">
                                        <img class="img-responsive" src="../images/recetall/menestrone.jpg" alt=" ">
                                    </div>
                                </div>
                                <div class="recetas-contenido title-color">
                                    <h4><strong>MENESTRONE</strong></h4>
                                    <p>Deliciosa receta de vegetales es fácil y rápida,esta receta que prepararemos para que consuman todos los hipertensos.</p>
                                    <div class="receta-btn"><a href="#">VER MÁS</a></div>
                                </div>


                            </div>
                        </div>
                        
                         
                    </div>


                <div class="col-md-12 col-xs-12" style="padding: 50px">
                    <h3 class="title-color">ENSALADAS</h3>
                    <div class="col-md-4 col-sm-6 col-xs-12 " style="padding-top: 15px">
                       <div class="container-receta">
                            <div class="bg-containerObesidad">
                                <div class="container-receta-img">
                                    <img class="img-responsive" src="../images/recetall/ensaladapera.jpg" alt=" ">
                                </div>
                            </div>
                            <div class="recetas-contenido title-color">
                                <h4><strong>ENSALADA EN PERA </strong></h4>
                                <p>Esta ensalada es ideal para la gente que debe mantener algún tipo de dieta restrictiva.</p>
                                <div class="receta-btn"><a href="#">VER MÁS</a></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12 " style="padding-top: 15px">
                        <div class="container-receta">
                            <div class="bg-containerDiabeticos">
                                <div class="container-receta-img">
                                    <img class="img-responsive" src="../images/recetall/salteado.jpg" alt=" ">
                                </div>
                            </div>
                            <div class="recetas-contenido title-color">
                                <h4><strong>SALTEADO DE VERDURAS CON GARBANZO</strong></h4>
                                <p>Este plato, está cocinado con una base de Verduras y legumbres,esta receta que prepararemos para que consuman todos las personas que padecen de diabetes.</p>
                                <div class="receta-btn"><a href="#">VER MÁS</a></div>
                            </div>
                         </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12 " style="padding-top: 15px">
                        <div class="container-receta">
                            <div class="bg-containerHipertensos">
                                <div class="container-receta-img">
                                    <img class="img-responsive" src="../images/recetall/gratinado.JPG" alt=" ">
                                </div>
                            </div>
                            <div class="recetas-contenido title-color">
                                <h4><strong>GRATINADO DE VERDURAS</strong></h4>
                                <p>El apio reduce los niveles de HTA y ejerce un efecto dilatador sobre los vasos renales.</p>
                                <div class="receta-btn"><a href="#">VER MÁS</a></div>
                            </div>
                         </div>
                    </div>
                    
                     <div class="col-md-4 col-sm-6 col-xs-12 " style="padding-top: 15px">
                        <div class="container-receta">
                            <div class="bg-containerHipertensos">
                                <div class="container-receta-img">
                                    <img class="img-responsive" src="../images/recetall/brochetaverduras.jpg" alt=" ">
                                </div>
                            </div>
                            <div class="recetas-contenido title-color">
                                <h4><strong>BROCHETA DE VERDURAS</strong></h4>
                                <p>El pimiento, gracias a su sabor intenso, se puede utilizar como condimento de sustitución en dietashiposódicas. </p>
                                <div class="receta-btn"><a href="#">VER MÁS</a></div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-md-4 col-sm-6 col-xs-12 " style="padding-top: 15px">
                        <div class="container-receta">
                            <div class="bg-containerObesidad">
                                <div class="container-receta-img">
                                    <img class="img-responsive" src="../images/recetall/berenjenas.jpg" alt=" ">
                                </div>
                            </div>
                            <div class="recetas-contenido title-color">
                                <h4><strong>BERENJENA AL HORNO </strong></h4>
                                <p>La berenjena favorece a la eliminación del colesterol y elimina las toxinas del organismo.</p>
                                <div class="receta-btn"><a href="#">VER MÁS</a></div>
                            </div>
                         </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12 " style="padding-top: 15px">
                        <div class="container-receta">
                            <div class="bg-containerDiabeticos">
                                <div class="container-receta-img">
                                    <img class="img-responsive" src="../images/recetall/salmon.jpg" alt=" ">
                                </div>
                            </div>
                            <div class="recetas-contenido title-color">
                                <h4><strong>SALMON AL HORNO CON VERDURAS Y ACEITUNAS </strong></h4>
                                <p>Este plato, sencillo y económicopara que consuman todos los diabeticos nos va a permitir beneficiarnos del salmón.</p>
                                <div class="receta-btn"><a href="#">VER MÁS</a></div>
                            </div>


                        </div>
                    </div>
                   
                </div>
                <div class="col-md-12 col-xs-12" style="padding: 50px">
                    <h3 class="title-color">PLATO FUERTE</h3>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12 " style="padding-top: 15px">
                        <div class="container-receta">
                            <div class="bg-containerGastritis">
                                <div class="container-receta-img">
                                    <img class="img-responsive" src="../images/recetall/noquis.jpg" alt=" ">
                                </div>
                            </div>
                            <div class="recetas-contenido title-color">
                                <h4><strong>ÑOQUIS DE REQUESON</strong></h4>
                                <p>Plato esquisto natural y suave para el estomago recomendado para los dias que necesitas sentirte liviano después de almorzar.</p>
                                <div class="receta-btn"><a href="#">VER MÁS</a></div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-4 col-sm-6 col-xs-12 " style="padding-top: 15px">
                        <div class="container-receta">
                            <div class="bg-containerHipertensos">
                                <div class="container-receta-img">
                                    <img class="img-responsive" src="../images/recetall/pechugapavo.jpg" alt=" ">
                                </div>
                            </div>
                            <div class="recetas-contenido title-color">
                                <h4><strong>PECHUGAS DE PAVO CON MANZANA</strong></h4>
                                <p>Las propiedades antioxidantes de la manzana disminuyen el riesgo de enfermedad cardiovascular.</p>
                                <div class="receta-btn"><a href="#">VER MÁS</a></div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-4 col-sm-6 col-xs-12 " style="padding-top: 15px">
                        <div class="container-receta">
                            <div class="bg-containerObesidad">
                                <div class="container-receta-img">
                                    <img class="img-responsive" src="../images/recetall/hamburguesaquinua.jpg" alt=" ">
                                </div>
                            </div>
                            <div class="recetas-contenido title-color">
                                <h4><strong>HAMBURGUESA DE LENTEJA Y QUINUA</strong></h4>
                                <p>Esta hamburguesa de lentejas y quinoa que te enseñaré a preparar a continuación sí es saludable y vale la pena hacerla.</p>
                                <div class="receta-btn"><a href="#">VER MÁS</a></div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-4 col-sm-6 col-xs-12 " style="padding-top: 15px">
                        <div class="container-receta">
                            <div class="bg-containerDiabeticos">
                                <div class="container-receta-img">
                                    <img class="img-responsive" src="../images/recetall/alcachofas1.jpg" alt="">
                                </div>
                            </div>
                            <div class="recetas-contenido title-color">
                                <h4><strong>ALCACHOFAS A LA MARINERA</strong></h4>
                                <p>Esta receta que prepararemos para que consuman todos las personas que padecen de diabetes.</p>
                                <div class="receta-btn"><a href="#">VER MÁS</a></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12 " style="padding-top: 15px">
                        <div class="container-receta">
                            <div class="bg-containerObesidad">
                                <div class="container-receta-img">
                                    <img class="img-responsive" src="../images/recetall/pizzaverdura.jpg" alt=" " >
                                </div>
                            </div>
                            <div class="recetas-contenido title-color">
                                <h4><strong>PIZZA DE VERDURAS</strong></h4>
                                <p>Una buena y sana idea de esta receta que prepararemos para que consuman todos los obesos.</p>
                                <div class="receta-btn"><a href="#">VER MÁS</a></div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                     <div class="col-md-4 col-sm-6 col-xs-12 " style="padding-top: 15px">
                        <div class="container-receta">
                            <div class="bg-containerGastritis">
                                <div class="container-receta-img">
                                    <img class="img-responsive" src="../images/recetall/cazuelapollo.JPG" alt=" ">
                                </div>
                            </div>
                            <div class="recetas-contenido title-color">
                                <h4><strong>CAZUELA DE POLLO FRUTADA</strong></h4>
                                <p>Receta que aparte de ser muy sana para nuestro estomago, es muy rica y gustosa y sobre todo muy baja en calorias</p>
                                <div class="receta-btn"><a href="#">VER MÁS</a></div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-12 col-xs-12" style="padding: 50px">
                    <h3 class="title-color">POSTRES</h3>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12 " style="padding-top: 15px">
                        <div class="container-receta">
                            <div class="bg-containerHipertensos">
                                <div class="container-receta-img">
                                    <img class="img-responsive" src="../images/recetall/pastelzanahoria.jpg" alt=" ">
                                </div>
                            </div>
                            <div class="recetas-contenido title-color">
                                <h4><strong>PASTEL DE ZANAHORIA</strong></h4>
                                <p>Las zanahorias destacan por tener un gran valor nutritivo y vitamínico,se destaca por su papel cardioprotector.</p>
                                <div class="receta-btn"><a href="#">VER MÁS</a></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12 " style="padding-top: 15px">
                        <div class="container-receta">
                            <div class="bg-containerDiabeticos">
                                <div class="container-receta-img">
                                    <img class="img-responsive" src="../images/recetall/crema.jpg" alt=" " >
                                </div>
                            </div>
                            <div class="recetas-contenido title-color">
                                <h4><strong>CREMA DE LIMON EN BAJAS CALORIAS</strong></h4>
                                <p>Al sustituir el azúcar por edulcorante, este postre es perfecto para incluir en dietas de control de peso para que consuman todos los diabeticos.</p>
                                <div class="receta-btn"><a href="#">VER MÁS</a></div>
                            </div>


                        </div>
                    </div>
              
                    
                    <div class="col-md-4 col-sm-6 col-xs-12 " style="padding-top: 15px">
                        <div class="container-receta">
                            <div class="bg-containerObesidad">
                                <div class="container-receta-img">
                                    <img class="img-responsive" src="../images/recetall/postrepina.jpg" alt=" ">
                                </div>
                            </div>
                            <div class="recetas-contenido title-color">
                                <h4><strong>POSTRE DE PIÑA</strong></h4>
                                <p>Fácil y deliciosa un manera diferente de comer frutas con crema bajas calorías.</p>
                                <div class="receta-btn"><a href="#">VER MÁS</a></div>
                            </div>


                        </div>
                    </div>

                 
                  

                </div>
            </div>



        </section>


    </div>


    <!-- 3rd party libraries -->
    <script src="../js/bootstrap/bootstrap.min.js"></script>
   



    <footer>

        <div id="footer" class=" footer-surround footer-container" style="background-color: white;">
            <div class="container" style="padding: 30px 0px;  ">
                <div class="col-xs-12 col-md-12">
                    <div class="col-md-12 col-xs-12 text-center" style="padding-top: 5px; color: #767676">
                        <span style="padding: 5px">
                    <svg viewBox="0 0 32 32" style="fill:currentColor;height:1.3em;width:1.3em;"><path d="M8 14.408v-4.165c0-.424.35-.812.77-.812h2.519V7.347c0-4.84 2.484-7.311 7.42-7.347 1.645 0 3.219.212 4.692.636.455.141.63.424.595.883l-.56 4.062c-.035.178-.14.354-.315.531-.21.105-.42.176-.63.14-.875-.247-1.784-.352-2.799-.352-1.399 0-1.61.283-1.61 1.73v1.8H22.6c.42 0 .805.423.805.883l-.349 4.17c0 .422-.35.705-.77.705H18.08v16c0 .424-.349.812-.769.812h-5.213c-.42 0-.804-.388-.804-.812V15.185h-2.52A.781.781 0 0 1 8 14.408" data-reactid=".2epjzj253pc.2.1.2:2.0.1.0.0"></path></svg></span>
                        <span style="padding: 5px">
                    <svg viewBox="0 0 32 32" style="fill:currentColor;height:1.3em;width:1.3em;"><path d="M31 6.359c-1.16.493-2.32.821-3.546.952 1.293-.755 2.22-1.872 2.718-3.384a13.048 13.048 0 0 1-3.913 1.512c-1.226-1.282-2.75-1.939-4.51-1.939-3.413 0-6.167 2.728-6.167 6.115 0 .493.067.953.166 1.38-4.94-.23-9.513-2.596-12.664-6.378-.563.954-.861 1.972-.861 3.089 0 2.07 1.027 3.914 2.75 5.063-.995-.032-1.922-.295-2.816-.755v.066c0 2.89 2.12 5.424 4.94 5.982-.63.165-1.16.231-1.624.231-.298 0-.696-.033-1.127-.132a6.074 6.074 0 0 0 5.737 4.242c-2.22 1.742-4.775 2.63-7.658 2.63-.563 0-1.06-.034-1.425-.1 2.85 1.841 6 2.76 9.413 2.76 7.294 0 12.83-4.012 15.514-9.302 1.359-2.661 2.021-5.359 2.021-8.086v-.46c-.033-.165-.033-.296-.033-.329A12.663 12.663 0 0 0 31 6.36" data-reactid=".2epjzj253pc.2.1.2:5.0.1.0.0"></path></svg>
                    </span>
                        <span style="padding: 5px">
                    <svg viewBox="0 0 24 24" style="fill:currentColor;height:1.3em;width:1.3em;" data-reactid=".2epjzj253pc.2.1.2:6.0.1.0"><path d="M23.094.906C22.489.301 21.767 0 20.922 0H3.078C2.233 0 1.511.301.906.906.301 1.511 0 2.233 0 3.078v17.844c0 .845.301 1.567.906 2.172.605.605 1.327.906 2.172.906h17.844c.845 0 1.567-.301 2.172-.906.605-.605.906-1.327.906-2.172V3.078c0-.845-.301-1.567-.906-2.172zM8.618 8.65c.943-.911 2.077-1.367 3.4-1.367 1.331 0 2.47.456 3.413 1.367.943.91 1.413 2.013 1.413 3.303 0 1.291-.473 2.393-1.413 3.304-.943.911-2.082 1.367-3.414 1.367-1.322 0-2.456-.456-3.399-1.367-.943-.91-1.413-2.013-1.413-3.304 0-1.29.47-2.392 1.413-3.303zm12.664 11.632c0 .27-.093.498-.277.681a.923.923 0 0 1-.671.275H3.632a.927.927 0 0 1-.681-.275.921.921 0 0 1-.274-.68V10.155H4.88a6.737 6.737 0 0 0-.314 2.047c0 2.001.73 3.708 2.187 5.119 1.457 1.413 3.213 2.118 5.266 2.118a7.5 7.5 0 0 0 3.749-.97 7.288 7.288 0 0 0 2.718-2.632 6.93 6.93 0 0 0 1-3.632c0-.708-.106-1.391-.314-2.048h2.109v10.124zm0-13.954c0 .301-.106.559-.314.767a1.046 1.046 0 0 1-.766.313h-2.719c-.303 0-.558-.105-.766-.313a1.046 1.046 0 0 1-.314-.767V3.75c0-.291.106-.543.314-.756.208-.213.465-.321.766-.321h2.719c.303 0 .558.108.766.32.208.214.314.466.314.757v2.58z" data-reactid=".2epjzj253pc.2.1.2:6.0.1.0.0"></path></svg>
                </span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>





</html>
