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

        public function obtener_docentes($dni){
            $sql = "SELECT id, dni, nombres, apellidos,celular,observacion,tipo FROM docente WHERE dni = {$dni}";
            $resDB = mainModel::ejecutar_una_consulta($sql);
            $docentesAll = array();            
            while($registro = $resDB->fetch(PDO::FETCH_ASSOC)){                
                $docentesAll[] = $registro;                
            }
            return json_encode($docentesAll);
        }

        public function insertar_docente($datos_get){
            $sql = "INSERT INTO docente (id,dni,nombres,apellidos,tipo,observacion,celular) VALUES (NULL,'{$datos_get['dni']}','{$datos_get['nombres']}','{$datos_get['apellidos']}','{$datos_get['tipo']}','{$datos_get['observacion']}','{$datos_get['celular']}')";            
            $resDB = mainModel::ejecutar_una_consulta($sql);
            if($resDB->rowCount()>0){
                return json_encode(true);
            }            
            return json_encode(false);
        }
        
        public function asistencia_docente($datos_get){
            $sql = "INSERT INTO certificado (id,dni,anio,tipo,estado) VALUES (NULL,'{$datos_get['dni']}','{$datos_get['anio']}','{$datos_get['tipo']}','{$datos_get['estado']}')";            
            $resDB = mainModel::ejecutar_una_consulta($sql);
            if($resDB->rowCount()>0){
                return json_encode(true);
            }            
            return json_encode(false);            
        }

        public function verificar_asistencia_docente($datos_get){
            $sql = "SELECT id,dni,anio FROM certificado WHERE dni='{$datos_get['dni']}' AND anio = '{$datos_get['anio']}'";        
            $resDB = mainModel::ejecutar_una_consulta($sql);
            if($resDB->rowCount()>0){
                return json_encode(true);
            }            
            return json_encode(false); 
        }

        public function comprobar_certificado_doc($datos_get){

            $sql="SELECT docente.id,docente.dni,docente.nombres,docente.apellidos,certificado.anio,certificado.tipo,certificado.estado FROM docente INNER JOIN certificado ON docente.dni = certificado.dni WHERE certificado.dni = '{$datos_get['dni']}' AND certificado.anio = '{$datos_get['anio']}' AND certificado.estado = 1";
            $resDB = mainModel::ejecutar_una_consulta($sql);
            if($resDB->rowCount()>0){
                return json_encode(true);
            }           
            return json_encode(false);            
        }
        //funcion relacionado con la emision de certificado
        public function infoDocenteParaCertificado($dni,$anio){
            
            $sql="SELECT docente.nombres,docente.apellidos,certificado.dni,certificado.tipo,certificado.anio,certificado.estado FROM docente INNER JOIN certificado ON docente.dni = certificado.dni WHERE certificado.dni = '{$dni}' AND certificado.anio = '{$anio}' AND certificado.estado = 1";
            $resDB = mainModel::ejecutar_una_consulta($sql);
            if($resDB->rowCount()>0){
                return $resDB->fetch(PDO::FETCH_ASSOC);                                
            }            
            return false;
        }

        public function actualizar_docente_controller($datos_get){

            $sql = "UPDATE docente SET dni = '{$datos_get['dni']}', nombres = '{$datos_get['nombres']}', apellidos = '{$datos_get['apellidos']}', tipo = '{$datos_get['tipo']}', observacion = '{$datos_get['observacion']}', celular='{$datos_get['celular']}' WHERE dni = '{$datos_get['dni']}' AND id= '{$datos_get['id_docente']}'";
            $resDB = mainModel::ejecutar_una_consulta($sql);
            if($resDB->rowCount()>0){
                return json_encode(true);
            }            
            return json_encode(false); 
        }

        public function traerdoc_nomyape_list($datos_get){
            $sql = "SELECT id, dni, nombres, apellidos, tipo FROM docente WHERE nombres LIKE '%{$datos_get['nombres']}%' AND apellidos LIKE '%{$datos_get['apellidos']}%' LIMIT 10";
            $resDB = mainModel::ejecutar_una_consulta($sql);
            $docentesAll_lst = array();            
            while($registro = $resDB->fetch(PDO::FETCH_ASSOC)){                
                $docentesAll_lst[] = $registro;                
            }
            return json_encode($docentesAll_lst);
        }

    }
    

?>