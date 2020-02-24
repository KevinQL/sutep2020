<?php

    $conAjax = is_null($conAjax)?false:$conAjax;
    if($conAjax){
        require_once "../core/mainModel.php";
    }else{
        require_once "./core/mainModel.php";
    }

    class adminModel extends mainModel {

        protected function prueba_model(){
            return "MSJ MODEL SUCCESS";
        }

    }
    

?>