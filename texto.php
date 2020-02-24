<?php
    //Numero de pagina seleccionado que es presionado por el usuario
    $select_num_pg = $_GET['select_num_pg'];

    

    $datos = Array(
        Array("titulo"=>"Noti1-{$select_num_pg}","descripcion"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas commodi optio quaerat vel officia quibusdam eius, laborum ipsam natus, facilis, quidem modi possimus! Dolorum, illum.","foto_url"=>"lib2.jpg"),
        Array("titulo"=>"Noti2-{$select_num_pg}","descripcion"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas commodi optio quaerat vel officia quibusdam eius, laborum ipsam natus, facilis, quidem modi possimus! Dolorum, illum.","foto_url"=>"logosutep.png"),
        Array("titulo"=>"Noti3-{$select_num_pg}","descripcion"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas commodi optio quaerat vel officia quibusdam eius, laborum ipsam natus, facilis, quidem modi possimus! Dolorum, illum.","foto_url"=>"prot.png"));
    
    echo json_encode($datos);
?>
