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
    }

}else {
    return "ERROR!!! :C";
}

?>