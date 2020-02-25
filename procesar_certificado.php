<?php

    include('conect.php');

    $dni_form = $_REQUEST['dni'];

    function Existe_docente($dni){
        $con = new DB();
        $server = $con->conectar();

        $consulta = "SELECT * FROM docente WHERE dni = '{$dni}'";
        $result = mysqli_query($server, $consulta);
        $fila = mysqli_fetch_array($result);

        if($fila){
            return true;
        }else{
            return false;
        }

    }

    if(Existe_docente($dni_form)){
        $docente = true;

    }else{
        $docente = false;
    }

    echo $docente;

?>