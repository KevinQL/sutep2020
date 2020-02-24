<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuteAndahuaylas</title>

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

    <!-- PRESENTAACION -->
    <div class="presentacion pb-5 mt-5">
        <header class="container">
            <div class="row">
                <div class="col-md-12 my-4">
                    <a href="#"><img src="img/logosutep.png" alt="logo" class="logo"></a>
                    <h1 class="display-4 font-weight-bold text-center mt-4 text-uppercase">SUTE-ANDAHUAYLAS</h1>
                </div>
                <div class="col-md-6 text-center">
                    <img src="img/logosutep.png" alt="imagen1" class="img-fluid" style="width: 285px;">
                </div>
                <div class="col-md-6 text-center">
                    <p class="texto-presentacion">Presentación del sindicato... Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut molestiae porro est excepturi culpa!</p>
                    <ul class="list-unstyled list-inline my-5 ul-redes">
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                    <form action="http://localhost/TRABAJOS/stp-nuev/?pg=forum">
                        <!--<input type="text" class="form-control rounded-0 my-4 text-center inptex-email" placeholder="Escribe tu Correo">
                        -->
                        <h4 class="display-4 texto-naranja">EVENTO SUTE 2020</h4>
                        <a href="?pg=forum" class="btn btn-lg btn-outline-warning rounded-0 display-2">
                            IR A  FORÚM 20202
                        </a>
                    </form>
                    
                </div>
            </div>
        </header>
    </div>

    <!-- EVENTO FORÚM-->
    <div class="caja-padre scrol-seccion-forum" id="forum">
        <div class="text-center pb-3 seccion-forum">
            <div class="clip-forum mb-0 scrol-clip"></div>
    
            <h2 class="py-2">GRAN EVENTO 2020</h2>            
            <h2 class="text-1 text-uppercase">FORÚM - 2020</h2>
            <div class="text-2 text-uppercase mb-0">FORÚM - 2020</div>
            <a href="?pg=forum" class="btn btn-lg btn-outline-light mt-3 rounded-0">FORÚM - 2020</a>
        </div>
    </div>

    <!--SECCION NOTCIAS -->
    
    <section class="container my-2">
        <div class="row text-center ">
            <div class="col-md-8 scrol-novedades-br">
                <h1>NOVEDADES</h1>
                <hr class="linea linea3">
                <div class="contenido_noticia">                
                    <!--<div class="col-md-12">
                        <h4>TITULO DE LA NOTICIA</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate itaque voluptas dolore incidunt autem ut nisi consequuntur eaque ducimus a.</p>
                        <button class="btn btn-sm btn-color-noticia" data-toggle="modal" data-target="#staticBackdrop">ver mas</button>                    
                    </div>

                    <hr class="linea linea-noticias">

                    <div class="col-md-12">
                        <h4>TITULO DE LA NOTICIA</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate itaque voluptas dolore incidunt autem ut nisi consequuntur eaque ducimus a.</p>
                        <button class="btn btn-sm btn-color-noticia" data-toggle="modal" data-target="#staticBackdrop1">ver mas</button>     
                    </div>

                    <hr class="linea linea-noticias">

                    <div class="col-md-12">
                        <h4>TITULO DE LA NOTICIA</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate itaque voluptas dolore incidunt autem ut nisi consequuntur eaque ducimus a.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate itaque voluptas dolore incidunt autem ut nisi consequuntur eaque ducimus a.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate itaque voluptas dolore incidunt autem ut nisi consequuntur eaque ducimus a.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate itaque voluptas dolore incidunt autem ut nisi consequuntur eaque ducimus a.</p>
                        <button class="btn btn-sm btn-color-noticia" data-toggle="modal" data-target="#staticBackdrop2">ver mas</button>                                        
                    </div>

                    <hr class="linea linea-noticias">
                    -->
                </div>
                
                <div class="nav-espacio-forum display-md-none"></div>

                <div>
                    <div class="espacio-numer"></div>
                    <div>
                        <span id="num_pag_actual" class="text-muted">PAGINA 1</span>
                    </div>
                    <div class="pg-numer">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                                <li class="page-item disabled" id="disable-ant">
                                    <a class="page-link num-pg-anterior" href="null" tabindex="-1" aria-disabled="true">Anterior</a>
                                </li>
                                <li class="page-item"><a class="page-link num-pg-noti1" href="null"><?php echo 1; ?></a></li>
                                <li class="page-item"><a class="page-link num-pg-noti2" href="null"><?php echo 2; ?></a></li>
                                <li class="page-item"><a class="page-link num-pg-noti3" href="null"><?php echo 3; ?></a></li>
                                
                                <li class="page-item" id="disable-sig">
                                    <a class="page-link num-pg-siguiente" href="null">Siguiente</a>
                                </li>
                            </ul>
                        </nav> 
                    </div>                    
                </div>
            </div>
            <div class="col-md-4 scrol-redes">
                <div class="nav-espacio-forum display-md-none"></div>
                <h1>REDES</h1>
                <hr class="linea linea2">
                <!--
                <iframe width="340" height="240" src="https://www.youtube.com/embed/fE0v6lZ3fuw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FRezuam-600773577055743%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                -->
            </div>
        </div>
    </section>

    <!-- PRIMERA SECCION -->
    <section class="container my-2" id="">
        <div class="row text-center">
            <div class="col-md-6 scrol-sec1-left">
                <img src="img/lib2.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 texto-centrar scrol-sec1-right">
                <div>
                    <h3>POR UNA EDUCACIÓN</h3>
                    <p><i class="fas fa-book-reader fa-1x"></i></p>
                    <P>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis soluta voluptas beatae placeat dicta numquam aliquam aut, sint fuga nemo accusamus temporibus eligendi architecto doloribus? Doloremque vel fuga eos ratione.</P>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem sint molestias hic ipsa assumenda ullam corrupti eum voluptates ducimus saepe!</p>
                </div>
            </div>
        </div>
    </section>
    <!-- SEGUNDA SECCION -->
    <section class="container mb-5" id="">
        <div class="row text-center">
            
            <div class="col-md-6 texto-centrar scrol-sec2-left">
                <div>
                    <h3>POR UNA LUCHA</h3>
                    <p><i class="fas fa-hand-rock fa-1x"></i></p>
                    <P>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis soluta voluptas beatae placeat dicta numquam aliquam aut, sint fuga nemo accusamus temporibus eligendi architecto doloribus? Doloremque vel fuga eos ratione.</P>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem sint molestias hic ipsa assumenda ullam corrupti eum voluptates ducimus saepe!</p>
                </div>
            </div>
            <div class="col-md-6 scrol-sec2-right">
                <img src="img/port4.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </section>




    <!-- SECTION CONTACTO -->

    <section class="py-3 bg-dark" id="contactos">
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
                        <span>©&nbsp; </span><span >2019</span><span>&nbsp;</span><span>SuteAndahuaylas</span><span>.&nbsp;</span><span>Todos los derechos reservados</span><span>&nbsp;</span>. Desarrollado&nbsp;por&nbsp;<a href="http://rezuam.intcap.org/" target="_blank">Rezuam</a>
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
    <script src="js/contenido.js"></script>
    <?php
        include_once("modules/scripts.html");
    ?>
</body>
</html>