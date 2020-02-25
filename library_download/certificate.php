<?php 

try {
    
$dni= base64_decode($_GET['id']); //decodifica

require_once('tcpdf/config/lang/eng.php');
header("Content-Type: text/html; charset=iso-8859-1 ");
require_once('tcpdf/tcpdf.php');
require_once('../conect.php');


//-----

$con = new DB;
$docente = $con->conectar();    

$strConsulta = "SELECT * from docente where dni =  '$dni'";

$result = mysqli_query($con->conect,$strConsulta);


$fila = mysqli_fetch_array($result);

//Está vacio
if(empty($fila)){
    header("location:/"); //Si está vacio me redirecciona al inicio de la página
}

$nombre=utf8_encode($fila['nombres']);   //soluciona problemas de tildes       
$apellido = utf8_encode($fila['apellidos']); //soluciona problemas de tildes ## -- averiguar -- utf8_decode($registro['campo'])
$tipo = $fila['tipo'];
//----


$pdf = new TCPDF('L', 'mm', 'A4');
$pdf->SetTitle('Certificados SUTEP'); //Titlo del pdf
$pdf->setPrintHeader(false); //No se imprime cabecera
$pdf->setPrintFooter(false); //No se imprime pie de pagina
//$pdf->SetMargins(20, 20, 20, false); //Se define margenes izquierdo, alto, derecho
$pdf->SetAutoPageBreak(false, 0); //Se define un salto de pagina con un limite de pie de pagina
$pdf->addPage('L','A4',	0);

        if ($tipo==0) { //participante
            $pdf->Image('images/ugel0.png', 0, 0,300,211);  
        }else{
            if ($tipo == 1) { //Organizador
                $pdf->Image('images/ugel1.png', 0, 0,300,211); 
            }else{ // 2: Ponente
                $pdf->Image('images/ugel2.png', 0, 0,300,211); 
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

// CODE 128 C
$pdf->write1DBarcode($dni, 'C128C', 250,180, '', 20, 0.4, $style, 'N');	


$pdf->lastPage();
ob_end_clean();
$pdf->output("certificado sutep {$nombre}.pdf" , 'I');


} catch (Exception $th) {
    header("location:/");
}

 ?>