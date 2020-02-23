<?php
    
    $namePg = $_GET['pg']?$_GET['pg']:"inicio";
    if(isset($namePg) && !empty($namePg)){        

        if($namePg == "inicio" ||$namePg == "forum" || $namePg == "organizacion" || $namePg == "certificado"){
            $url = $namePg.".php";
            //include_once("modules/navegacion.html");
            include_once($url);
            return null;
        }
        
        header("location:http://localhost/TRABAJOS/stp-nuev/?pg=inicio");

    }else{
        header("location:http://localhost/TRABAJOS/stp-nuev/?pg=inicio");
    }


?>