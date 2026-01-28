<?php

include './Conexion.php';
$link = conectarse();
$REPORTE = $_REQUEST["reporte"];
$TIPO = $_REQUEST["tipo"];
$FECHA_INICIAL = $_REQUEST["f_inicial"];
$FECHA_FINAL = $_REQUEST["f_final"];
//PARAMETROS SP
$params = array(
    $REPORTE,
    $TIPO,
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
        ->setLastModifiedBy("Jonathan Galarza")
        ->setTitle("Cartera Vencida")
        ->setSubject("Reportes")
        ->setDescription("Registros")
        ->setKeywords("office 2010 openxml php")
        ->setCategory("Registros Facturados");

if ($REPORTE == "D") {



    // Combino las celdas desde A1 hasta O1
    $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:O1');
    $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A2', 'NÚMERO REGISTRO')
            ->setCellValue('B2', 'FECHA')
            ->setCellValue('C2', 'APELLIDOS Y NOMBRES')
            ->setCellValue('D2', 'ANCIANATO')
            ->setCellValue('E2', 'DIRECCIÓN')
            ->setCellValue('F2', 'CEDULA')
            ->setCellValue('G2', 'RUC')
            ->setCellValue('H2', 'DER. ANUAL')
            ->setCellValue('I2', 'ESPECIE')
            ->setCellValue('J2', 'IMP. ANUAL')
            ->setCellValue('K2', 'MULTA')
            ->setCellValue('L2', 'TOTAL');



// Fuente de la primera fila en negrita
    $boldArray = array('font' => array('bold' => true,), 'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER));
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

////LLAMA STORE PROCEDURE
    $query1 = "{call dbo.SP_CONSULTA_CARTERA_VENCIDA_FECHAS(?,?,?,?)}";
    $result1 = sqlsrv_query($link, $query1, $params);

    if ($result1 === false) {
        if (($errors = sqlsrv_errors() ) != null) {
            foreach ($errors as $error) {
                $json_data["SQLSTATE"] = $error['SQLSTATE'];
                $json_data["code"] = $error['code'];
                $json_data["message"] = $error['message'];
            }
        }
        $json_data["ind"] = false;
        echo json_encode($json_data);

//    die( print_r( sqlsrv_errors(), true) );
    } else {

        $cel = 3;
        while ($row = sqlsrv_fetch_array($result1, SQLSRV_FETCH_ASSOC)) {
            $v_registro = $row['PAT_REGISTRO'];
            $v_fecha = $row['PAT_CAT_FECHA_AVALUO'];
            $v_nombres = $row['NOMBRES'];
            $v_ancianato = $row['PAT_ANCIANO'];
            $v_direccion = $row['PRO_DIRECCION'];
            $v_cedula = $row['PRO_CEDULA'];
            $v_ruc = $row['PRO_RUC'];
            $v_der_anual = $row['PAT_CAT_DERECHO_ANUAL'];
            $v_especie = $row['PAT_CAT_ESPECIE'];
            $v_imp_anual = $row['PAT_CAT_IMPTO_ANUAL'];
            $v_multa = $row['MULTA'];
            $v_total = $row['PAT_CAT_TOTAL_PAGO'];

            $a = "A" . $cel;
            $b = "B" . $cel;
            $c = "C" . $cel;
            $d = "D" . $cel;
            $e = "E" . $cel;
            $f = "F" . $cel;
            $g = "G" . $cel;
            $h = "H" . $cel;
            $i = "I" . $cel;
            $j = "J" . $cel;
            $k = "K" . $cel;
            $l = "L" . $cel;

            $objPHPExcel->setActiveSheetIndex(0)
                    ->setCellValue($a, $v_registro)
                    ->setCellValue($b, $v_fecha)
                    ->setCellValue($c, $v_nombres)
                    ->setCellValue($d, $v_ancianato)
                    ->setCellValue($e, $v_direccion)
                    ->setCellValue($f, $v_cedula)
                    ->setCellValue($g, $v_ruc)
                    ->setCellValue($h, $v_der_anual)
                    ->setCellValue($i, $v_especie)
                    ->setCellValue($j, $v_imp_anual)
                    ->setCellValue($k, $v_multa)
                    ->setCellValue($l, $v_total)

            ;
            $cel += 1;
        }

        $rango = "A2:$l";

        $styleArray = array('font' => array('name' => 'Arial', 'size' => 10),
            'borders' => array('allborders' => array('style' => PHPExcel_Style_Border::BORDER_THIN, 'color' => array('argb' => 'FFF')))
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
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
        header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header('Pragma: public'); // HTTP/1.0
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output');

        exit;
    }
}


    if ($REPORTE == "G") {


        // Combino las celdas desde A1 hasta O1
        $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:O1');
        $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A2', 'AÑO')
                ->setCellValue('B2', 'DER. ANUAL')
                ->setCellValue('C2', 'ESPECIE')
                ->setCellValue('D2', 'IMP. ANUAL')
                ->setCellValue('E2', 'MULTA')
                ->setCellValue('F2', 'TOTAL');


// Fuente de la primera fila en negrita
        $boldArray = array('font' => array('bold' => true,), 'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER));
        $objPHPExcel->getActiveSheet()->getStyle('A1:O2')->applyFromArray($boldArray);

//Ancho de las columnas
        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(20);





////LLAMA STORE PROCEDURE
        $query1 = "{call dbo.SP_CONSULTA_CARTERA_VENCIDA_FECHAS(?,?,?,?)}";
        $result1 = sqlsrv_query($link, $query1, $params);

        if ($result1 === false) {
            if (($errors = sqlsrv_errors() ) != null) {
                foreach ($errors as $error) {
                    $json_data["SQLSTATE"] = $error['SQLSTATE'];
                    $json_data["code"] = $error['code'];
                    $json_data["message"] = $error['message'];
                }
            }
            $json_data["ind"] = false;
            echo json_encode($json_data);

//    die( print_r( sqlsrv_errors(), true) );
        } else {

            $cel = 3;
            while ($row = sqlsrv_fetch_array($result1, SQLSRV_FETCH_ASSOC)) {
                $v_registro = $row['ANIO'];
                $v_fecha = $row['DER_ANUAL'];
                $v_nombres = $row['ESPECIE'];
                $v_ancianato = $row['IMPUESTO_ANUAL'];
                $v_direccion = $row['MULTA'];
                $v_cedula = $row['TOTAL'];


                $a = "A" . $cel;
                $b = "B" . $cel;
                $c = "C" . $cel;
                $d = "D" . $cel;
                $e = "E" . $cel;
                $f = "F" . $cel;


                $objPHPExcel->setActiveSheetIndex(0)
                        ->setCellValue($a, $v_registro)
                        ->setCellValue($b, $v_fecha)
                        ->setCellValue($c, $v_nombres)
                        ->setCellValue($d, $v_ancianato)
                        ->setCellValue($e, $v_direccion)
                        ->setCellValue($f, $v_cedula)





                ;
                $cel += 1;
            }

            $rango = "A2:$f";
            $styleArray = array('font' => array('name' => 'Arial', 'size' => 10),
                'borders' => array('allborders' => array('style' => PHPExcel_Style_Border::BORDER_THIN, 'color' => array('argb' => 'FFF')))
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
            header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
            header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
            header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
            header('Pragma: public'); // HTTP/1.0
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
            $objWriter->save('php://output');

            exit;
        }
    }

?>



