<?php 
       
     
//ESTABLECE CONEXION
include './Conexion.php';
$link =  conectarse();
//PARAMETROS WEB_SERVICE
$COD_TASA= $_REQUEST["cod_tasa"];
$VALOR_TASA = $_REQUEST["valor"];
//PARAMETROS SP
$parametro['COD_TASA'] = $COD_TASA;
$parametro['VALOR_TASA'] = $VALOR_TASA;
$procedure_params = array(
            array(&$parametro['COD_TASA'], SQLSRV_PARAM_IN),
            array(&$parametro['VALOR_TASA'], SQLSRV_PARAM_IN)
            );
//LLAMA STORE PROCEDURE
	$query1 = "EXEC SP_MANEJARTASAS @COD_TASA=?,@VALOR_TASA=?";
	$stmt = sqlsrv_prepare($link, $query1, $procedure_params);
	if (!sqlsrv_execute($stmt)) {
           $json_data["ind"] = false;
           $json_data["error"] =sqlsrv_errors();
           echo json_encode($json_data);
        }
        else {
            $json_data["ind"] = true;
//          $json_data["sql"] =$query1;
            echo json_encode($json_data);
        }
        
?>