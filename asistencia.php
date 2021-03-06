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

    

    <!-- SECCIÓN CERTIFICADO -->
    <section class="cuerpo-certificado secction-principal scrol-certificado">
        <div class="fondo-transparente">
            <div class="container">
                <div class="nav-espacio-forum"></div>
                <div class="row">
                    <div class="col-md-12 justify-content-center align-self-center px-5 p-sm-5 scrol-sec2-right">
                        <div class="text-white lead ">
                            <div class="">
                                <h3 class="text-center mb-2">ASISTENCIA DOCENTE</h3>
                                <div class="mb-2">
                                    <label for="">ID_DOC: </label>
                                    <input type="text" style="background:transparent; color:red" name="id-asis" disabled id="id-asis" value="">
                                </div>
                                <h5 id="advertencia-asistencia"><span class="p-1">Esperando...</span></h5>                                
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="text-left">INGRESE DNI</label>                                        
                                            <input type="number" name="dni-asis" class="form-control form-control-lg" id="dni-asis" required="required" placeholder="DNI...">
                                            <div class="text-sm" id="rs-cons-asis"><span>Esperando...</span></div>
                                        </div>  
                                    </div>  
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="text-left">AÑO EVENTO</label>
                                            <select name="anio-asis" id="anio-asis" class="form-control form-control-lg d-inline bg-outline-secondary">
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">                                            
                                            <label class="text-left">TIPO</label>
                                            <select name="tipo-asis" id="tipo-asis" class="form-control form-control-lg d-inline bg-outline-secondary">
                                                <option value="0">ASISTENTE</option>
                                                <option value="1">ORGANIZADOR</option>
                                                <option value="2">PONENTE</option>
                                            </select>
                                        </div>
                                    </div>                                    
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="text-left">INGRESE NOMBRES</label>                                        
                                            <input type="text" name="nombres-asis" class="form-control form-control-lg nombres-bsc-asis" id="nombres-asis" required="required" placeholder="NOMBRES...">
                                        </div> 
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="text-left">INGRESE APELLIDOS</label>                                        
                                            <input type="text" name="apellidos-asis" class="form-control form-control-lg apellidos-bsc-asis" id="apellidos-asis" required="required" placeholder="APELLIDOS...">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-left">NUMERO CELULAR</label>                                        
                                            <input type="number" name="celular-asis" class="form-control form-control-lg" id="celular-asis" required="required" placeholder="NUM. CELULAR">
                                        </div>  
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-left">OBSERVACION</label>                                        
                                            <textarea class="form-control" name="observacion-asis" id="observacion-asis" cols="50" rows="2" placeholder="OBS."></textarea>
                                        </div>  
                                    </div>
                                    <div class="col-md-12 text-center my-1" id="advertencia-cant-docente">
                                        <!--ADVERTENCIA AQUI-->
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn btn-lg btn-outline-warning btn-block my-3" id="btn-actualizar-asis">
                                            ACTUALIZAR
                                        </button>  
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn btn-lg btn-outline-warning btn-block my-3" id="btn-guardar-asis" onclick="guardar_y_asistencia()">
                                            GUARDAR Y ASISTENCIA
                                        </button>
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn btn-lg btn-outline-warning btn-block my-3 d-none" id="btn-asistencia-asis" onclick="asistencia()">
                                            ASISTENCIA
                                        </button>  
                                    </div>

                                    <div class="col-md-4">                                        
                                        <div class="form-group">
                                            <label class="text-left bg-dark d-block text-center my-0">COINCIDENCIAS</label>    
                                            <span id="coinci-asis-num" class="d-block lead bold bg-dark text-center my-0 text-warning">...</span>                                            
                                        </div>  
                                    </div>
                                </div>                                                                    

                            </div>
                        </div>
                    </div>
                </div>
            </div>                     
            <div class="nav-espacio-forum"></div>
        </div>
    </section>

    <!-- SECCION BUSCAR -->
    <section class="bg-darkFondo-asis pb-5">
        <div class="container">
            <h3 class="text-white text-center lead py-3">BUSCAR DOCENTE</h3>
            <div class="row">
                <!--
                <div class="col-md-4">
                    <div class="form-group">                                    
                        <input type="text" name="nombres-bsc-asis" class="form-control form-control-lg" id="nombres-bsc-asis" required="required" placeholder="NOMBRES...">
                    </div> 
                </div>
                <div class="col-md-8">
                    <div class="form-group">                                     
                        <input type="text" name="apellidos-bsc-asis" class="form-control form-control-lg" id="apellidos-bsc-asis" required="required" placeholder="APELLIDOS...">
                    </div>
                </div>
                -->
                <div class="col-md-12 text-center">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">#ENUM</th>
                                <th scope="col">NOMBRE</th>
                                <th scope="col">APELLIDO</th>
                                <th scope="col">DNI</th>
                                <th scope="col">TIPO</th>
                                <th scope="col">OPCION</th>
                            </tr>
                        </thead>
                        <tbody id="reslist-doce-asis">
                            <!--<tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Otto</td>
                                <td>Otto</td>
                                <td>
                                    <button class="btn btn-sm btn-warning">
                                        ELEGIR
                                    </button>
                                </td>
                            </tr>
                            -->
                        </tbody>
                    </table>                
                </div>
            </div>
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
    <script src="js/asistencia.js"></script>
</body>
</html>