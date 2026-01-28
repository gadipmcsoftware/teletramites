<?php 
       
     
//ESTABLECE CONEXION
include './Conexion.php';
$link =  conectarse();
//PARAMETROS WEB_SERVICE
$COD_RANGO  = $_REQUEST["cod_rango"];
$BAN_DESDE  = $_REQUEST["ban_desde"];
$BAN_HASTA  = $_REQUEST["ban_hasta"];
$BAN_IMPOSI = $_REQUEST["ban_imposi"];
$BAN_ESTADO = $_REQUEST["ban_estado"];
$TIPO_BANDA = $_REQUEST["tipo_banda"];
$ACCION     = $_REQUEST["accion"];
//PARAMETROS SP
$parametro['COD_RANGO']  = $COD_RANGO;
$parametro['BAN_DESDE']  = $BAN_DESDE;
$parametro['BAN_HASTA']  = $BAN_HASTA;
$parametro['BAN_IMPOSI'] = $BAN_IMPOSI;
$parametro['BAN_ESTADO'] = $BAN_ESTADO;
$parametro['TIPO_BANDA'] = $TIPO_BANDA;
$parametro['ACCION']     = $ACCION;
$procedure_params = array(
            array(&$parametro['COD_RANGO'], SQLSRV_PARAM_IN),
            array(&$parametro['BAN_DESDE'], SQLSRV_PARAM_IN),
            array(&$parametro['BAN_HASTA'], SQLSRV_PARAM_IN),
            array(&$parametro['BAN_IMPOSI'], SQLSRV_PARAM_IN),
            array(&$parametro['BAN_ESTADO'], SQLSRV_PARAM_IN),
            array(&$parametro['TIPO_BANDA'], SQLSRV_PARAM_IN),
            array(&$parametro['ACCION']    , SQLSRV_PARAM_IN)
            );
//LLAMA STORE PROCEDURE
	$query1 = "EXEC SP_MANEJARBANDAS @COD_RANGO=?,@BAN_DESDE=?,@BAN_HASTA=?,@BAN_IMPOSI=?,@BAN_ESTADO=?,@TIPO_BANDA=?,@ACCION=?";
	$stmt = sqlsrv_prepare($link, $query1, $procedure_params);
	if (!sqlsrv_execute($stmt)) {
           if( ($errors = sqlsrv_errors() ) != null)  
            {  
               foreach( $errors as $error)  
               {  
                   $json_data["SQLSTATE"] =$error['SQLSTATE'];
                   $json_data["code"] =$error['code'];
                   $json_data["message"] =$error['message'];
                   $json_data["query1"] =$COD_RANGO." ".$BAN_DESDE;
               }  
            }  
          $json_data["ind"] = false;
          echo json_encode($json_data);
        }
        else {
             $json_data["ind"] = true;
//          $json_data["sql"] =$query1;
            echo json_encode($json_data);
        }
        
?>