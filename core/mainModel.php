<?php
$conAjax = is_null($conAjax)?false:$conAjax;
if($conAjax){
    require_once "../core/configApp.php";
}else{
    require_once "./core/configApp.php";
}

class mainModel{

    /* Funcion para conectar a la BD - Function to connect to DB */
    protected function connect(){
        $link= new PDO(SGBD,USER,PASS);//array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        $link->exec("set names utf8");
        return $link;
    }

    /* Funcion para ejecutar una consulta simple - Function to execute a simple query */
    public function ejecutar_una_consulta($query){
        $response=self::connect()->prepare($query);
        $response->execute();
        return $response;
    }

}
/*
$objetdb = new mainModel();
$users = $objetdb->ejecutar_una_consulta("SELECT * FROM articulos");

while ($registro = $users->fetch(PDO::FETCH_ASSOC)) {
    # code...    
    var_dump($registro["titulo"]);
    echo "</br>".json_encode($registro);
    echo "<hr>";
}
*/



?>