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
                    <p class="texto-presentacion">POR UNA EDUCACIÓN CIENTÍFICA Y EL  DESARROLLO DE LOS PUEBLOS ANDINOS DEL PERÚ</p>
                    <ul class="list-unstyled list-inline my-5 ul-redes">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/Sute-Andahuaylas-Oficial-118870519500684/">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/Sute-Andahuaylas-Oficial-118870519500684/">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/Sute-Andahuaylas-Oficial-118870519500684/">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/Sute-Andahuaylas-Oficial-118870519500684/">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                    <form action="http://localhost/TRABAJOS/stp-nuev/?pg=forum">
                        <!--<input type="text" class="form-control rounded-0 my-4 text-center inptex-email" placeholder="Escribe tu Correo">
                        -->
                        <h4 class="display-4 texto-naranja">EVENTO SUTE 2020</h4>
                        <a href="?pg=forum" class="btn btn-lg btn-outline-warning rounded-0 display-2">
                            IR Al CURSO 2020
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
            <h2 class="text-1 text-uppercase">CURSO - 2020</h2>
            <div class="text-2 text-uppercase mb-0">CURSO - 2020</div>
            <a href="?pg=forum" class="btn btn-lg btn-outline-light mt-3 rounded-0">CURSO - 2020</a>
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
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FSute-Andahuaylas-Oficial-118870519500684%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                <iframe width="340" height="240" src="https://www.youtube.com/embed/fE0v6lZ3fuw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                    <P>Aquellos que educan bien a los niños merecen recibir más honores que sus propios padres, porque aquellos sólo les dieron vida, éstos el arte de vivir bien.</P>
                    <p>Aristóteles</p>
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
                    <P>El segundo objetivo de la educación es formar mentes que puede ser críticas, que puedan verificar y no aceptar todo lo que se les ofrece. El gran peligro de hoy son los lemas, opiniones colectivas, las tendencias ya hechas de pensamiento. Tenemos que ser capaces de oponernos de forma individual, para criticar, para distinguir entre lo que está bien y lo de lo que no.</P>
                    <p>Jean Piaget</p>
                </div>
            </div>
            <div class="col-md-6 scrol-sec2-right">
                <img src="img/port4.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </section>


    <?php
        include_once "./modules/pie_contact.html";
    ?>


    <script src="js/contenido.js"></script>
    <?php
        include_once("modules/scripts.html");
    ?>
</body>
</html>