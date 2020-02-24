<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forúm</title>

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- fontAwesome -->
    <script src="https://kit.fontawesome.com/1c90e8b317.js" crossorigin="anonymous"></script>
    <!-- mis estilos -->
    <link rel="stylesheet" href="css/main.css">
    <!-- scrollreveal -->
    <script src="https://unpkg.com/scrollreveal"></script>  

</head>
<body>

    <?php
        include_once("modules/navegacion_otros.html");
    ?>

    <div class="nav-espacio-forum"></div>
    <!-- EVENTO FORÚM-->
    <div class="caja-padre scrol-seccion-forum" id="forum">
        <div class="text-center pb-3 seccion-forum">
            <div class="clip-forum mb-0 scrol-clip"></div>
    
            <h2 class="py-2">GRAN EVENTO 2020</h2>            
            <h2 class="text-1 text-uppercase">FORÚM - 2020</h2>
            <div class="text-2 text-uppercase mb-0">FORÚM - 2020</div>
        </div>
    </div>

    <!-- PRIMERA SECCION -->
    <section class="container" id="">
        <div class="row text-center">
            <div class="col-md-12">
                <img src="img/ponente.png" alt="" class="img-fluid" style="width: 50px;">
            </div>                        
        </div>
    </section>

    <!-- SECCION PONENETES -->
    <div class="container my-4 scrol-dias-ponencias">
        <div class="row text-center">
            <div class="col-md-12">
                <h1 class="text-center">MIERCOLES 26 DE FEBRERO</h1> 
                <hr class="linea linea1">        
            </div>
            <div class="col-md-12">
                <h3>INAGURACIÓN</h3>
                <p>Presentación de autoridades Politicas y Educativas.</p>
                <p>9 : 00 am.</p>                
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div><i class="fas fa-user-tie fa-10x"></i></div>
                <h3>La Filosofía en estos últimos tiempos.</h3>
                <p>Mg. Jhon Ochoa Filósofo  y Sociólogo - UMSM</p>
                <p>10 : 30 am. – 1 : 00 pm.</p>
                <p>
                    <button class="btn btn-lg btn-outline-dark">VER ARCHIVOS</button>
                </p>                
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

    <div class="container my-4 scrol-dias-ponencias">
        <div class="row text-center">
            <div class="col-md-12">
                <h1 class="text-center">JUEVES 27 DE FEBRERO</h1>
                <hr class="linea linea2">               
            </div>
            <div class="col-md-6">            
                <div><i class="fas fa-user-tie fa-10x"></i></div>
                <h3>Desempeño Docente , Rubricas de Evaluación</h3>
                <p>Prof. Cesar Hugo Tito Rojas Dirigente Nacional</p>
                <p>8 : 00 am. - 10 : 30 am.</p>
            </div>
            <div class="col-md-6">
                <div><i class="fas fa-user-tie fa-10x"></i></div>
                <h3>Evaluación de Desempeño Docente y la cinco Rubricas de Evaluación</h3>
                <p>Mg. Lirio Peña Canales y  la Mg. Celinda Chacnama Esquivel Consultor MINEDU</p>
                <p>10 : 30 am. – 1 : 00 pm.</p>
            </div>
            <div class="col-md-6">            
                <div><i class="fas fa-user-tie fa-10x"></i></div>
                <h3>Lorem, ipsum dolor.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, id?</p>
            </div>
            <div class="col-md-6">
                <div><i class="fas fa-user-tie fa-10x"></i></div>
                <h3>Lorem, ipsum dolor.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, id?</p>
            </div>
        </div>
    </div>

    <div class="container my-4 scrol-dias-ponencias">
        <div class="row text-center">
            <div class="col-md-12">
                <h1 class="text-center">VIERNES 27 DE FEBRERO</h1>
                <hr class="linea linea3">            
            </div>
            <div class="col-md-6">            
                <div><i class="fas fa-user-tie fa-10x"></i></div>
                <h3>Lorem, ipsum dolor.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, id?</p>
            </div>
            <div class="col-md-6">
                <div><i class="fas fa-user-tie fa-10x"></i></div>
                <h3>Lorem, ipsum dolor.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, id?</p>
            </div>
        </div>
    </div>


    <!-- SECTION CONTACTO -->

    <section class="py-3 bg-dark mt-4" id="contactos">
        <div class="container">
            <div class="row pt-3">
                <div class="col-lg-5 pl-5 text-white">
                    <ul class="list-unstyled">
                        <li class="py-1">
                            <i class="ml-2 fas fa-user-circle"></i> Lorem, ipsum dolor.
                            <br>
                            <i class="ml-2 fas fa-phone-square"></i> 953 744 203 
                            <br>
                            <a href="#"><i class="mx-2 fab fa-facebook-f text-secondary "></i></a>
                            <a href="#"><i class="mx-2 fab fa-twitter text-secondary "></i></a>
                            <a href="#"><i class="mx-2 fab fa-instagram text-secondary "></i></a>

                        </li>
                        <li class="py-1">
                            <i class="ml-2 fas fa-user-circle"></i> Lorem, ipsum dolor. 
                            <br>
                            <i class="ml-2 fas fa-phone-square"></i> 978 004 592 
                            <br>
                            <a href="#"><i class="mx-2 fab fa-facebook-f text-secondary "></i></a>
                            <a href="#"><i class="mx-2 fab fa-twitter text-secondary "></i></a>
                            <a href="#"><i class="mx-2 fab fa-instagram text-secondary "></i></a>

                        </li>
                        <li class="py-1">
                            <i class="ml-2 fas fa-user-circle"></i> Lorem, ipsum dolor. 
                            <br>
                            <i class="ml-2 fas fa-phone-square"></i> 939 689 006 
                            <br>
                            <a href="#"><i class="mx-2 fab fa-facebook-f text-secondary "></i></a>
                            <a href="#"><i class="mx-2 fab fa-twitter text-secondary "></i></a>
                            <a href="#"><i class="mx-2 fab fa-instagram text-secondary "></i></a>

                        </li>
                    </ul>    
                </div>                
                <div class="col-lg-7"> 
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3877.0431263126356!2d-73.3914989501277!3d-13.655140590362942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916d2bc66e03d8a3%3A0x37c9b64471c102d1!2sCasa+del+Maestro!5e0!3m2!1ses-419!2spe!4v1558365401045!5m2!1ses-419!2spe" width="100%" height="350px" frameborder="0" style="border:0" allowfullscreen></iframe>                                            
                    <span class="text-white">
                        Av. Casafranca, Andahuaylas 03701
                    </span>                    
                </div>
            </div>
        </div>
    </section>   
    
    <!-- FOOTER -->
    <li class="list-group-item bg-contact bg-dark">  
        <footer class="bg-text-contact text-white ">
            <div class="container">
                
                <div class="p-3 row text-center">
                    <div class="col-md-9 text-md-left">
                        <span>©&nbsp; </span><span >2019</span><span>&nbsp;</span><span>SutepAndahuaylas</span><span>.&nbsp;</span><span>Todos los derechos reservados</span><span>&nbsp;</span>. Desarrollado&nbsp;por&nbsp;<a href="http://rezuam.intcap.org/" target="_blank">Rezuam</a>
                    </div>
                    <div class="col-md-3 text-md-right">
                        <a href="https://www.facebook.com/KevQL1109" target="_blank"><i class="mx-2 fab fa-facebook-f"></i></a>
                        <a href="#" target="_blank"><i class="mx-2 fab fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="mx-2 fab fa-instagram"></i></a>                        
                    </div>
                </div>
            
            </div>
        </footer>
    </li>

    <?php
        include_once("modules/scripts.html");
    ?>
</body>
</html>