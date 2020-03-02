<?php
	require_once('tcpdf/config/lang/eng.php');
	require_once('tcpdf/tcpdf.php');
	//require_once('conexion.php');

	$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
	$pdf->SetTitle('PDF Autogenerado en PHP'); //Titlo del pdf
	$pdf->setPrintHeader(false); //No se imprime cabecera
	$pdf->setPrintFooter(false); //No se imprime pie de pagina
	$pdf->SetMargins(20, 20, 20, false); //Se define margenes izquierdo, alto, derecho
	$pdf->SetAutoPageBreak(true, 20); //Se define un salto de pagina con un limite de pie de pagina
	$pdf->addPage();

	/*$sql = "SELECT * FROM cosas ORDER BY cosa_registro";
	$cosas = $mysqli->query($sql);
	$html = '';
	$item = 1;
	foreach($cosas as $row){
		$descripcion = $row['cosa_nombre'];
		$manufacturero = $row['cosa_manufacturero'];
		$registro = date('d/m/Y', strtotime($row['cosa_registro']));
		$imagen = $row['cosa_imagen'];
		$barcode = $row['cosa_codigo_barra'];
		$barcode = $pdf->serializeTCPDFtagParameters(array($barcode, 'C128', '', '', 72, 25, 0.5, array('position'=>'S', 'border'=>false, 'padding'=>2, 'fgcolor'=>array(0,0,0), 'bgcolor'=>array(255,255,255), 'text'=>true, 'font'=>'helvetica', 'fontsize'=>7, 'stretchtext'=>6), 'N'));

		$html .= '<table border="1" cellpadding="5">
					<tr>
						<td width="100" bgcolor="#E6E6E6"><b>Item: </b></td>
						<td width="220">'.$item.'</td>
					</tr>
					<tr>
						<td bgcolor="#E6E6E6"><b>Descripcion: </b></td>
						<td>'.$descripcion.'</td>
					</tr>
					<tr>
						<td bgcolor="#E6E6E6"><b>Manufacturero: </b></td>
						<td>'.$manufacturero.'</td>
					</tr>
					<tr>
						<td bgcolor="#E6E6E6"><b>Registro: </b></td>
						<td>'.$registro.'</td>
					</tr>
					<tr>
						<td bgcolor="#E6E6E6"><b>Imagen: </b></td>
						<td><img src="images/'.$imagen.'" width="120px"></td>
					</tr>
					<tr>
						<td bgcolor="#E6E6E6"><b>Barcode: </b></td>
						<td><tcpdf method="write1DBarcode" params="'.$barcode.'" /></td>
					</tr>
				 </table><br><br><br>';

		$item = $item+1;
	}*/

	$pdf->SetFont('Helvetica', '', 10);
	$pdf->writeHTML("hola", true, 0, true, 0);

	$pdf->lastPage();
	ob_end_clean();
	$pdf->output('Reporte.pdf', 'I');
?>