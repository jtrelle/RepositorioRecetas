<?php include('header.php'); ?>
   <!--       *******  BODY    *******     -->


    <div>


        <!--    SLIDER  -->
        <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
            <!-- Overlay -->
            <div class="hero">
                <div>
                    <h1>Bienvenido a CHOICE</h1>
                    <h3 style="font-size: 20px;">Recetas pensadas para ti</h3>
                </div>
                <button class="btn btn-hero btn-lg" onClick="window.location.href='pages/form.html'">Seleccionar recetas</button>
            </div>
            <div class="overlay"></div>


            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#bs-carousel" data-slide-to="1"></li>
                <li data-target="#bs-carousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item slides active">
                    <div class="slide-1"></div>

                </div>
                <div class="item slides">
                    <div class="slide-2"></div>

                </div>
                <div class="item slides">
                    <div class="slide-3"></div>

                </div>
            </div>
        </div>










        <div class="container" style="padding: 30px 0px;background-color: white;">
            <div class="row" style="padding-top: 60px;">
                <div class="col-md-12 col-xs-12">

                    <div class="col-md-8 col-md-offset-2 col-xs-12 col-xs-offset-0">
                        <div class="about text-center">
                            <div class="about-title">
                                ¿Quiénes somos?
                            </div>
                            <div class="about-content">
                               Somos un grupo de nutricionistas y chefs profesionales orgullosamente ecuatorianos, 
                                dedicados a la creación y distribución de recetas para gente con padecimientos médicos.
                                La premisa de nuestro trabajo es la satisfacción de nuestros clientes, ofreciendo recetas
                                de calidad nutricional y deliciosas a la vez.
                               
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-xs-12">

                    <div class="col-md-8 col-md-offset-2 col-xs-12 col-xs-offset-0">
                        <div class="about text-center">
                            <div class="about-title">
                                ¿Qué enfermedades abarcan nuestras recetas?
                            </div>
                            <div class="about-content">
                                Podrás identificar a qué tipo de enfermedad va dirigida la receta mediante colores. Te los presentamos aquí abajo:

                                <div class="row" style="padding-top: 40px;">
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="circle-about center-block center-block" style="background-color: #837197;"></div>
                                        <p>DIABETES</p>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="circle-about center-block" style="background-color: #ff8489;"></div>
                                        <p>HIPERTENSIÓN</p>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="circle-about center-block" style="background-color: #605756;"></div>
                                        <p>GASTRITIS</p>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="circle-about center-block" style="background-color: #ffde7d;"></div>
                                        <p>OBESIDAD</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>



        </div>


    </div>

<?php include('footer.php'); ?> 


