<?php
$conAjax = true;
require_once "../controller/adminController.php";


if(isset($_GET['accion']) && !empty($_GET['accion'])){
    
    $accion = $_GET['accion'];

    if($accion == "PG_NOTICIA"){
        
        //Numero de pagina seleccionado que es presionado por el usuario
        $select_num_pg = $_GET['select_num_pg'];    

        $objetdb = new adminController();
        $users = $objetdb->obtener_noticias_controller($select_num_pg);
        echo $users;
    }elseif ($accion == "TRAER_DOCENTES") {
        # code...        
        $dni_docente = $_GET['dni'];

        $objetdb = new adminController();
        $res_docente = $objetdb->obtener_docentes($dni_docente);
        echo $res_docente;
    }elseif ($accion == "INSERTAR_DOCENTE") {
        # code...
        $objetdb = new adminController();
        $res_docente = $objetdb->insertar_docente($_GET);
        echo $res_docente;
        //echo json_encode("INSERTAR DOCENTE ajx");
    }elseif ($accion == "ASISTENCIA_DOCENTE") {
        # code...
        $objetdb = new adminController();
        $res_docente = $objetdb->asistencia_docente($_GET);
        echo $res_docente;
    }elseif ($accion == "VERIFICAR_ASISTENCIA") {
        # code...
        $objetdb = new adminController();
        $res_docente = $objetdb->verificar_asistencia_docente($_GET);
        echo $res_docente;
    }

}else {
    return "ERROR!!! :C";
}

?>