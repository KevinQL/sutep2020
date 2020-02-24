<?php

    $conAjax = is_null($conAjax)?false:$conAjax;
    if($conAjax){
        require_once "../model/adminModel.php";
    }else{
        require_once "./model/adminModel.php";
    }
    
    class adminController extends adminModel {

        public function prueba_controller(){
            return "MSJ CONTROLLER SUCCESS ";
        }

        public function obtener_noticias_controller($select_num_pg){

            $desde_num = self::devuelve_num_para_noticia($select_num_pg);

            $sql = "SELECT * FROM articulos LIMIT {$desde_num},3";
            $resDB = mainModel::ejecutar_una_consulta($sql);  
            
            $noticiasAll = array();
            while($registro = $resDB->fetch(PDO::FETCH_ASSOC)){
                $noticiasAll[] = $registro;                
            }
            return json_encode($noticiasAll);
        }

        private function devuelve_num_para_noticia($num){
            $num -= 1;
            if($num == 0){
                return 0;                
            }else {
                return $num*3;
            }
        }
    }
    

?>