<?php
$consulta = array();
//ESTABLECE CONEXION
	 include './Conexion.php';
         $link =  conectarse();
//PARAMETROS WEB_SERVICE
$COD_CONSULTA = $_REQUEST["cod_consulta"];
$CEDULA  = $_REQUEST["cedula"];
$TIPO_PREDIO  = $_REQUEST["tipo_predio"];
//$PRUEBA  =0;
//PARAMETROS SP
//$parametro['COD_CONSULTA']  = $COD_CONSULTA;
//$parametro['CEDULA']  = $CEDULA;
//$parametro['TIPO_PREDIO']  = $TIPO_PREDIO;
//$procedure_params = array(
//            array(&$parametro['COD_CONSULTA'], SQLSRV_PARAM_IN),
//            array(&$parametro['CEDULA'], SQLSRV_PARAM_IN),
//            array(&$parametro['TIPO_PREDIO'], SQLSRV_PARAM_IN)
//            );
$params = array(   
                 $COD_CONSULTA,  
                 $CEDULA,  
                 $TIPO_PREDIO 
               ); 
////LLAMA STORE PROCEDURE
// $json_data["ind"] = $params;
//          echo json_encode($json_data);
$query1 = "{call SP_CONSULTA_AVALUO( ?,?,?)}";
$result1=sqlsrv_query($link, $query1, $params);
// $json_data["row"] =sqlsrv_fetch_array( $result1, SQLSRV_FETCH_ASSOC);
// echo json_encode($json_data);
//            echo json_encode($json_data);
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
        else {
            
             
                while ( $row = sqlsrv_fetch_array( $result1, SQLSRV_FETCH_ASSOC))
                {                                                                                                                            
                      array_push($consulta, array($row["clave_catastral"],$row["identificacion"],$row["nombre"],$row["apellido"],$row["direccion"],$row["parroquia"],$row["area_terreno"],$row["avaluo"]));
//                        echo $row["clave_catastral"];
                }
            
            
            $json_data["ind"] = true;
            $json_data["row"] = $consulta;
            echo json_encode($json_data);
        }
       
       
?>