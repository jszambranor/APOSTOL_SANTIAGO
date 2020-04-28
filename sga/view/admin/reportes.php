<?php
session_start();
require_once '../../global/ClassGlobalConexion.php';
$cod_curso = $_GET['curso'];
$objConexion = new Conexion();
$conexion = $objConexion->get_Conexion();
date_default_timezone_set('America/Guayaquil');
$date = date("Y-m-d");
$query = "SELECT * FROM apostols_UEAS.ASISTENCIAS,apostols_UEAS.PERSONAS WHERE ASISTENCIAS.CEDULA_ALUMNO = PERSONAS.CEDULA AND ASISTENCIAS.COD_AULA = :_COD_AULA AND ASISTENCIAS.FECHA_ASISTENCIA = :_FECHA";
$stmt = $conexion->prepare($query);
$stmt->bindParam(':_COD_AULA',$cod_curso,PDO::PARAM_STR);
$stmt->bindParam(':_FECHA',$date,PDO::PARAM_STR);
$stmt->execute();
$contenido = "";
$C = 0;
$estado = "";
while($data = $stmt->fetch()){
$C++;
if($data['ESTADO_ASISTENCIA'] == 1){
    $estado = "ASISTENCIA";
}elseif($data['ESTADO_ASISTENCIA'] == 2){
    $estado = "ATRASO";
}elseif($data['ESTADO_ASISTENCIA'] == 3){
    $estado = "FALTA";
}
      $contenido = $contenido. "<tr>"
            . "<td>".$C."</td>"
            . "<td>".$data['CEDULA_ALUMNO']."</td>"
            . "<td>".$data['NOMBRES']." ".$data['APELLIDOS']."</td>"
            . "<td>".$data['FECHA_ASISTENCIA']."</td>"
            . "<td>".$estado."</td>"
             . "</tr>";
}
ob_clean();
ob_start();
require_once '../../tcpdf/tcpdf.php';
$pdf = new TCPDF('L', 'mm', 'A4', true, 'UTF-8', false);

$pdf->SetCreator('PDF_CREATOR');
$pdf->SetAuthor('UEAS System');
$pdf->SetTitle("LISTA DE ASISTENCIAS");
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetMargins(10, 10, 10, false);
$pdf->SetAutoPageBreak(true, 20);
$pdf->SetFont('times', '', 12);
$pdf->addPage();
$content = '';
$content .= '
		<div class="row">
        	<div class="col-md-12">
            	<h1 style="text-align:center;">LISTA DE ASISTENCIAS <br> '.date("Y-m-d").'</h1>
              <center>
      <table border="1" cellpadding="5" align="center" style="width:100%;">
        <thead>
          <tr>
          <th style="max-width:auto; font-weight: bold;">ID</th>
  				<th style="max-width:auto; font-weight: bold;">CEDULA</th>
  				<th style="max-width:auto; font-weight: bold;">NOMBRES</th>
  				<th style="max-width:auto; font-weight: bold;">FECHA</th>
                                <th style="max-width:auto; font-weight: bold;">ESTADO</th>
          </tr>
        </thead>
        <tbody>
	';

 $content = $content.$contenido;

$content = $content. '</tbody></table> </center>';


$pdf->writeHTML($content, true, 0, true, 0);
$pdf->lastPage();
ob_end_clean();
$pdf->output('Reporte_de_Pacientes_'.date("Y-m-d").'.pdf', 'I');
 ?>
