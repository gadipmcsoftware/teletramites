<?php
include './Conexion.php';
$link =  conectarse();
$FECHA_INICIAL       = $_REQUEST["f_inicial"];
$FECHA_FINAL  = $_REQUEST["f_final"];
//PARAMETROS SP
$params = array(     
                  $FECHA_INICIAL,
                 $FECHA_FINAL
                ); 

if (PHP_SAPI == 'cli')
	die('Este programa sólo se puede ejecutar desde un navegador Web');
/** Incluye PHPExcel */
    require_once '../Classes/PHPExcel.php';
// Crear nuevo objeto PHPExcel
$objPHPExcel = new PHPExcel();
// Propiedades del documento
$objPHPExcel->getProperties()->setCreator("Jonathan Galarza")
							 ->setLastModifiedBy("Oscar Parraga")
							 ->setTitle("Cierre de Caja Arrendamiento de Mercados")
							 ->setSubject("Mercados")
							 ->setDescription("Registros Facturados")
							 ->setKeywords("office 2010 openxml php")
							 ->setCategory("Registros Facturados");
 // Combino las celdas desde A1 hasta O1
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:O1');
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A2', 'NÚMERO REGISTRO')
            ->setCellValue('B2', 'ESTADO')
            ->setCellValue('C2', 'APELLIDOS Y NOMBRES RAZÓN SOCIAL')
            ->setCellValue('D2', 'FECHA')
            ->setCellValue('E2', 'NÚMERO FACTURA')
            ->setCellValue('F2', 'VALOR ALICUOTA')
            ->setCellValue('G2', 'VALOR CANON')
            ->setCellValue('H2', 'VALOR IVA')
            ->setCellValue('I2', 'SERVICIO ADMINISTRATIVO')
            ->setCellValue('J2', 'RECARGO')
            ->setCellValue('K2', 'INTERESES')
            ->setCellValue('L2', 'COSTA JUDICIAL')
            ->setCellValue('M2', 'TOTAL PAGO')
            ->setCellValue('N2', 'AREA M2');
     
         

            
// Fuente de la primera fila en negrita
$boldArray = array('font' => array('bold' => true,),'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER));
$objPHPExcel->getActiveSheet()->getStyle('A1:O2')->applyFromArray($boldArray);

//Ancho de las columnas
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);	
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);	
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(100);	
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(20);	
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(20);	
$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(20);	
$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(20);	
$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(20);	
$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(20);


////LLAMA STORE PROCEDURE
$query1 = "{call dbo.SP_CONSULTA_MERCADOS_FACTURADOS(?,?)}";
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
    $mercatcodigo=$row['MER_CAT_REGISTRO'];
    $estados=$row['MER_CAT_ESTADO'];
    $nombres=$row['NOMBRES'];
    $paranio=$row['MER_CAT_FECHA_PAGO'];
    $mercatnumfactura=$row['MER_CAT_NUMFACTURA'];
    $valoralicuota=$row['ALICUOTA'];
    $valorcanon=$row['CANON'];
    $iva=$row['MER_CAT_IVA'];
    $valespecie=$row['MER_CAT_VALESPECIE'];
    $recargo=$row['MER_CAT_RECARGO'];
    $interess=$row['MER_CAT_INTERES'];
    $procesal=$row['COSTA_PROCESAL'];
    $tottal=$row['MER_CAT_TOTALAVALUO'];
    $metrocuadrado=$row['MER_CAT_VALMCUADRADO'];
  
    
    $a="A".$cel;
    $b="B".$cel;
    $c="C".$cel;
    $d="D".$cel;
    $e="E".$cel;
    $f="F".$cel;
    $g="G".$cel;
    $h="H".$cel;
    $i="I".$cel;
    $j="J".$cel;
    $k="K".$cel;
    $l="L".$cel;
    $m="M".$cel;
    $n="N".$cel;


                
    $objPHPExcel->setActiveSheetIndex(0)
    ->setCellValue($a, $mercatcodigo)
    ->setCellValue($b, $estados)
    ->setCellValue($c, $nombres)
    ->setCellValue($d, $paranio)
    ->setCellValue($e, $mercatnumfactura)
    ->setCellValue($f, $valoralicuota)
    ->setCellValue($g, $valorcanon)
    ->setCellValue($h, $iva)
    ->setCellValue($i, $valespecie)
    ->setCellValue($j, $recargo)
    ->setCellValue($k, $interess)
    ->setCellValue($l, $procesal)
    ->setCellValue($m, $tottal)
    ->setCellValue($n, $metrocuadrado)

            
            ;
    $cel+=1;
}
$rango="A2:$n";
$styleArray = array('font' => array( 'name' => 'Arial','size' => 10),
'borders'=>array('allborders'=>array('style'=> PHPExcel_Style_Border::BORDER_THIN,'color'=>array('argb' => 'FFF')))
 );
$objPHPExcel->getActiveSheet()->getStyle($rango)->applyFromArray($styleArray);
// Cambiar el nombre de hoja de cálculo
$objPHPExcel->getActiveSheet()->setTitle('REPORTE FACTURADOS');
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



