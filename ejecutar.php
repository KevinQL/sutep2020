<?php

    $link = new PDO('mysql:host=localhost;dbname=ugelandahuaylas','root','cardenas');
    $link->exec("charset names utf8");

    $sql = "SELECT dni,tipo FROM docente";
    $stm = $link->prepare($sql);
    $stm->execute();
    $num = 0;
    while($registro = $stm->fetch(PDO::FETCH_ASSOC)){
        $num+=1;
        echo "0,{$registro['dni']},2019,{$registro['tipo']},1";
        echo "</br>";
    }
    echo "cantidad de egistro -> " . $num;

?>