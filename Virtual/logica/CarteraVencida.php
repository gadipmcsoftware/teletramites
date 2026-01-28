<?php
$consulta = array();
//ESTABLECE CONEXION
	 include './Conexion.php';
         $link =  conectarse();
//PARAMETROS WEB_SERVICE
$ANIO   = $_REQUEST["anio"];                
$REPORTE   = $_REQUEST["reporte"];       
$TIPO   = $_REQUEST["tipo"];       
$FECHA_FINAL  = $_REQUEST["f_final"];
//PARAMETROS SP
$params = array(    
    $ANIO,
                 $REPORTE,
                 $TIPO,
                 $FECHA_FINAL
                ); 
////LLAMA STORE PROCEDURE
$query1 = "{call dbo.SP_CONSULTA_CARTERA_VENCIDA(?,?,?,?)}";
$result1=sqlsrv_query($link,$query1,$params);


if ($REPORTE=="D"){
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
}
        else {
                while ( $row = sqlsrv_fetch_array( $result1, SQLSRV_FETCH_ASSOC))
                {    
                    
                        array_push($consulta, array(
                          $row["PAT_REGISTRO"],//0
                          $row["PAT_CAT_FECHA_AVALUO"],//1
                          $row["NOMBRES"],//2
                          $row["PAT_ANCIANO"],//3
                          $row["PRO_DIRECCION"],//4
                          $row["PRO_CEDULA"],//5
                          $row["PRO_RUC"],//6
                          $row["PAT_CAT_DERECHO_ANUAL"],//7
                          $row["PAT_CAT_ESPECIE"],//8
                          $row["PAT_CAT_IMPTO_ANUAL"],//9
                          $row["MULTA"],//10
                          $row["PAT_CAT_TOTAL_PAGO"]//11
                       
                         
                          ));
                }
            
            $json_data["ind"] = true;
            $json_data["row"] = $consulta;
            echo json_encode($json_data);
        } 
}

if($REPORTE=="G"){
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
}
        else {
                while ( $row = sqlsrv_fetch_array( $result1, SQLSRV_FETCH_ASSOC))
                {    
                    
                        array_push($consulta, array(
                          $row["ANIO"],//0
                          $row["DER_ANUAL"],//1
                          $row["ESPECIE"],//2
                          $row["IMPUESTO_ANUAL"],//3
                          $row["MULTA"],//4
                          $row["TOTAL"],//5
                       
                          ));
                }
            
            $json_data["ind"] = true;
            $json_data["row"] = $consulta;
            echo json_encode($json_data);
        }
        
        
}


        

?>