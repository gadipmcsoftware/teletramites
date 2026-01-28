<?php
include './Conexion.php';
$link =  conectarse();
$ID  = $_REQUEST["id"];
//PARAMETROS SP
$params = array(     
                 $ID
                ); 

if (PHP_SAPI == 'cli')
	die('Este programa sólo se puede ejecutar desde un navegador Web');
/** Incluye PHPExcel */
    require_once '../Classes/PHPExcel.php';
// Crear nuevo objeto PHPExcel
$objPHPExcel = new PHPExcel();
// Propiedades del documento
$objPHPExcel->getProperties()->setCreator("Oscar Parraga")
							 ->setLastModifiedBy("Oscar Parraga")
							 ->setTitle("Office 2010 XLSX Simulacion de Impuesto Predial")
							 ->setSubject("Office 2010 XLSX Simulacion de Impuesto Predial")
							 ->setDescription("Documento  para Office 2010 XLSX, generado usando clases de PHP.")
							 ->setKeywords("office 2010 openxml php")
							 ->setCategory("Reporte de Tramites por usuario");
 // Combino las celdas desde A1 hasta O1
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:I1');
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'REPORTE DE TRAMITES REALIZADOS POR USUARIO')
            ->setCellValue('A2', 'NUMERO TRAMITE')
            ->setCellValue('B2', 'CEDULA')
            ->setCellValue('C2', 'NOMBRE PROFESIONAL')
            ->setCellValue('D2', 'TRAMITE')
            ->setCellValue('E2', 'NOMBRE PROPIETARIO')
            ->setCellValue('F2', 'ESTADO TRAMITE')
            ->setCellValue('G2', 'FUNCIONARIO')
            ->setCellValue('H2', 'CLAVE CATASTRAL')
            ->setCellValue('I2', 'OBSERVACIÓN');
            
// Fuente de la primera fila en negrita
$boldArray = array('font' => array('bold' => true,),'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER));
$objPHPExcel->getActiveSheet()->getStyle('A1:I2')->applyFromArray($boldArray);

//Ancho de las columnas
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);	
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(15);	
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(200);	
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(200);	
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(200);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(32);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(32);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(40);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(400);
////LLAMA STORE PROCEDURE
$query1 = "{call SP_TRAEREPORTE(?)}";
$result1=sqlsrv_query($link,$query1,$params);

if( $result1 === false) {
    if( ($errors = sqlsrv_errors() ) != null)  
            {  
               foreach( $errors as $error)  
               {  
                   $json_data["SQLSTATE"] =$error['SQLSTATE'];
                   $json_data["code"] =$error['code'];
                   $json_data["message"] =$error['message'];
               }  
            }  
          $json_data["ind"] = false;
          echo json_encode($json_data);
   
//    die( print_r( sqlsrv_errors(), true) );
}
else{
  
$cel=3;
while ( $row = sqlsrv_fetch_array( $result1, SQLSRV_FETCH_ASSOC))
{  
    $numtramite=$row['NUM_TRAMI'];
    $cedula=$row['CED_PROFE'];
    $nom_profe=$row['NOM_PROFE'];
    $tramite=$row['DESC_TIP_TRA'];
    $nom_proprie=$row['NOMBRE'];
    $estado=$row['DESC_ESTA_TRA'];
    $funcionario=$row['DESCRIPTION'];
    $clave_catastral=$row['CLAVE_CATASTRAL'];
    $observacion=$row['OBSE_TRAMITE'];
    $a="A".$cel;
    $b="B".$cel;
    $c="C".$cel;
    $d="D".$cel;
    $e="E".$cel;
    $f="F".$cel;
    $g="G".$cel;
    $h="H".$cel;
    $i="I".$cel;
    $objPHPExcel->setActiveSheetIndex(0)
    ->setCellValue($a, $numtramite)
    ->setCellValue($b, $cedula)
    ->setCellValue($c, $nom_profe)
    ->setCellValue($d, $tramite)
    ->setCellValue($e, $nom_proprie)
    ->setCellValue($f, $estado)
    ->setCellValue($g, $funcionario)
    ->setCellValue($h, $clave_catastral)
    ->setCellValue($i, $observacion);
    $cel+=1;
}
$rango="A2:$i";
$styleArray = array('font' => array( 'name' => 'Arial','size' => 10),
'borders'=>array('allborders'=>array('style'=> PHPExcel_Style_Border::BORDER_THIN,'color'=>array('argb' => 'FFF')))
 );
$objPHPExcel->getActiveSheet()->getStyle($rango)->applyFromArray($styleArray);
// Cambiar el nombre de hoja de cálculo
$objPHPExcel->getActiveSheet()->setTitle('REPORTE TRAMITES');
// Establecer índice de hoja activa a la primera hoja , por lo que Excel abre esto como la primera hoja
$objPHPExcel->setActiveSheetIndex(0);
// Redirigir la salida al navegador web de un cliente ( Excel5 )
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="reporte.xls"');
header('Cache-Control: max-age=0');
// Si usted está sirviendo a IE 9 , a continuación, puede ser necesaria la siguiente
header('Cache-Control: max-age=1');
// Redirigir la salida al navegador web de un cliente ( Excel5 )
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="reporte.xls"');
header('Cache-Control: max-age=0');
// Si usted está sirviendo a IE 9 , a continuación, puede ser necesaria la siguiente
header('Cache-Control: max-age=1');
// Si usted está sirviendo a IE a través de SSL , a continuación, puede ser necesaria la siguiente
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
 
exit;
}
?>



