<?php 

try {
    
    $dni= base64_decode($_GET['indetnecod']); //decodifica los datos enviados por GET
    $anio= base64_decode($_GET['oina']); //decodifica los datos enviados por GET

    require_once('tcpdf/config/lang/eng.php');
    header("Content-Type: text/html; charset=iso-8859-1 ");
    require_once('tcpdf/tcpdf.php');

    //require_once('../conect.php');
    $conAjax = true;
    require_once('../controller/adminController.php');
    $objConsult = new adminController();
    $result = $objConsult->infoDocenteParaCertificado($dni,$anio);
    
    if($result == false || empty($result)){
        echo "PARA EMITIR SU CERTIFICADO, COMUNIQUESE CON EL RESPONSABLE DEL EVENTO";
        //header("location:/"); //Si está vacio me redirecciona al inicio de la página
    }else{
        //recuperando datos de docente para emitir certificado
        $nombre=utf8_encode($result['nombres']);   //soluciona problemas de tildes       
        $apellido = utf8_encode($result['apellidos']); //soluciona problemas de tildes ## -- averiguar -- utf8_decode($registro['campo'])
        $tipo = $result['tipo'];
        $aniodb = $result['anio'];
        $estado = $result['estado'];
        //EVALUA EL ESTADO DEL DOCENTE. 1:ACTIVO , 0:INACTIVO
        if($estado !== 0){//repetitivo. En la consulta sql ya se valida que el docente esté activo.
            //emitir certificado
            $pdf = new TCPDF('L', 'mm', 'A4');
            $pdf->SetTitle('Certificados SUTE'); //Titlo del pdf
            $pdf->setPrintHeader(false); //No se imprime cabecera
            $pdf->setPrintFooter(false); //No se imprime pie de pagina
            //$pdf->SetMargins(20, 20, 20, false); //Se define margenes izquierdo, alto, derecho
            $pdf->SetAutoPageBreak(false, 0); //Se define un salto de pagina con un limite de pie de pagina
            $pdf->addPage('L','A4',	0);
    
                //cambia directorio deacuerdo al año del evento
                $urlCerti = "carpetaEvento".$aniodb;
    
                if ($tipo==0) { //participante
                    $pdf->Image('images/'.$urlCerti.'/ugel0.png', 0, 0,300,211);  
                }else{
                    if ($tipo == 1) { //Organizador
                        $pdf->Image('images/'.$urlCerti.'/ugel1.png', 0, 0,300,211); 
                    }else{ // 2: Ponente
                        $pdf->Image('images/'.$urlCerti.'/ugel2.png', 0, 0,300,211); 
                    }
                } 
    
            $pdf->SetFont('Helvetica', 'B', 21);
            $pdf->Ln(90);
            $pdf->Cell(260,6,' '.$nombre.' '.$apellido,0,0,'C');
    
            $style = array(
                'position' => '',
                'align' => 'C',
                'stretch' => false,
                'fitwidth' => true,
                'cellfitalign' => '',
                'border' => false,
                'hpadding' => 'auto',
                'vpadding' => 'auto',
                'fgcolor' => array(0,0,0), //array(0,0,0)
                'bgcolor' => false, //array(255,255,255),
                'text' => true,
                'font' => 'helvetica',
                'fontsize' => 8,
                'stretchtext' => 4
            );
    
            // CODE 128 C - BARCODE
            $pdf->write1DBarcode($dni, 'C128C', 250,180, '', 20, 0.4, $style, 'N');	
    
            $pdf->lastPage();
            ob_end_clean();
            $pdf->output("certificado sute {$nombre}.pdf" , 'I');            

        }else{
            echo "USTEDE TIENE DEUDAS PENDIENTES";
        }

    }


} catch (Exception $th) {
    header("location:/");
}

 ?>