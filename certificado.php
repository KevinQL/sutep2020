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
    <link rel="stylesheet" href="css/main2.css">
    <!-- scrollreveal -->
    <script src="https://unpkg.com/scrollreveal"></script>  

</head>
<body>

    <?php
        include_once("modules/navegacion.html");
    ?>

    <div class="nav-espacio-forum"></div>

    <!-- SECCIÓN CERTIFICADO -->
    <section class="cuerpo-certificado secction-principal scrol-certificado">
        <div class="fondo-transparente">
            <div class="container py-5">
                <div class="nav-espacio-forum"></div>
                <div class="row">
                    <div class="col-md-6 text-center scrol-sec2-left">
                        <img src="img/certifiacdo1.png" class="img-fluid" width="370px;" alt="">
                    </div>
                    <div class="col-md-6 justify-content-center align-self-center px-5 p-sm-5 scrol-sec2-right">
                        <div class="text-white lead ">
                            <div class="">
                                <h3 class="text-center my-4">CERTIFICADO DOCENTE</h3>
                                <form id="formulario">
                                    <div class="form-group">
                                        <label class="text-left">Seleccione Año del Evento</label>
                                        <select name="anio-certi" id="anio-certi" class="form-control form-control-sm d-inline bg-outline-secondary">
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-left">Seleccione Tipo documento</label>
                                        <input type="text" class="form-control form-control-sm d-inline" disabled readonly="readonly" value="DNI ▼">
                                    </div>                                    

                                    <input type="number" name="dni-certi" class="form-control form-control-lg" id="dni-certi" required="required" placeholder="Ingrese DNI">

                                    <button class="btn btn-lg btn-outline-warning btn-block my-3" id="btn-obtener">
                                        OBTENER
                                    </button>
                                </form>

                                <div class="notice-general">
                                    <div class="alert alert-warning alert-dismissible fade hiden notice" role="alert">
                                       <span class="notification">RESULTANDO...</span>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times</span> 
                                        </button>
                                    </div>
                                    
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
                    <div class="nav-espacio-forum"></div>
                    <div class="nav-espacio-forum"></div>
                    <div class="nav-espacio-forum"></div>

        </div>

    </section>



    
    <!-- FOOTER -->
    <li class="list-group-item bg-contact bg-dark">  
        <footer class="text-white ">
            <div class="container">
                
                <div class="p-3 row text-center">
                    <div class="col-md-9 text-md-left">
                        <span>©&nbsp; </span><span >2020</span><span>&nbsp;</span><span>SuteAndahuaylas</span><span>.&nbsp;</span><span>Todos los derechos reservados</span><span>&nbsp;</span>. Desarrollado&nbsp;por&nbsp;<a href="http://rezuam.com/" target="_blank">Rezuam</a>
                    </div>
                    <div class="col-md-3 text-md-right">
                        <a href="http://rezuam.com/" target="_blank"><i class="mx-2 fab fa-facebook-f"></i></a>
                        <a href="http://rezuam.com/" target="_blank"><i class="mx-2 fab fa-twitter"></i></a>
                        <a href="http://rezuam.com/" target="_blank"><i class="mx-2 fab fa-instagram"></i></a>                        
                    </div>
                </div>
            
            </div>
        </footer>
    </li>

    <?php
        include_once("modules/scripts.html");
    ?>
    <script src="js/certificado.js"></script>
</body>
</html>