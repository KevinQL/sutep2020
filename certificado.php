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
                                        <select name="anio" id="anio" class="form-control form-control-sm d-inline bg-outline-secondary">
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-left">Seleccione Tipo documento</label>
                                        <input type="text" class="form-control form-control-sm d-inline" disabled readonly="readonly" value="DNI ▼">
                                    </div>                                    

                                    <input type="number" name="dni" class="form-control form-control-lg" id="dni" required="required" placeholder="Ingrese DNI">

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


        <!-- AJAX CDN-->
        <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous">
    </script>
    
    
    <script>

        $(document).ready(function(){
            document.getElementById('btn-obtener').addEventListener('click',function(event){
                event.preventDefault();
                var dni = document.getElementById('dni').value;

                if( dni.length != 8 || ((dni/dni) != 1) ){
                    console.log("Número de DNI incorrecto!!");
                    No_es_Dni();

                    console.log( $('#formulario').serialize() ); //prueba :)          

                    return null;

                }else{

                    $.ajax({
                        type: "POST",
                        url: "procesar_certificado.php",
                        data: $('#formulario').serialize(),
                        success: function(data){
                            console.log(data);
                            let request_server=data;
                            if(request_server){
                                Descargar();
                            }else{
                                console.log("USUARIO NO EXISTE")                                    
                                Usuario_No_Existe();
                            }

                        }

                    });

                }

                /*
                * Funciones para las notificaciones de consulta
                */
                
                function Descargar(){
                    $('.notice-general').html(
                        `<div class="alert alert-success alert-dismissible fade show text-center notice" role="alert">
                            <span class="notification"> certificado para ${dni} 
                            <a href='library_download/certificate.php?chmodmodeelle=%&${btoa(dni)}&${btoa("Lenyn putito siempre putito")}&id=${btoa(dni)}' target='_blank' class="btn btn-warning btn-lg btn-block">Descargar pdf</a> </span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times</span> 
                            </button>
                        </div>`
                    );
                }

                function Usuario_No_Existe(){
                    $('.notice-general').html(
                        `<div class="alert alert-danger alert-dismissible fade show notice" role="alert">
                            <span class="notification lead">No existe!!</span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times</span> 
                            </button>
                        </div>`
                    );
                }

                function No_es_Dni(){
                    $('.notice-general').html(
                        `<div class="alert alert-warning alert-dismissible fade show notice" role="alert">
                            <span class="notification">Numero de DNI incorrecto!!</span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times</span> 
                            </button>
                        </div>`
                    );
                }


            });
        });


    </script>


    <?php
        include_once("modules/scripts.html");
    ?>
</body>
</html>