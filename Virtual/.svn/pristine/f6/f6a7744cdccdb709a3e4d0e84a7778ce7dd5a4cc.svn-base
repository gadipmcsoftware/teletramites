<?php
$consulta = array();
//ESTABLECE CONEXION
	 include './Conexion.php';
         $link =  conectarse();
//PARAMETROS WEB_SERVICE
$ID       = $_REQUEST["id"];
$TIP_CON  = $_REQUEST["tip_con"];
//PARAMETROS SP
$params = array(     
                 $ID,
                 $TIP_CON
                ); 
////LLAMA STORE PROCEDURE
$query1 = "{call SP_CONSULTRAMITES(?,?)}";
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
   

}
        else {
            
             
                while ( $row = sqlsrv_fetch_array( $result1, SQLSRV_FETCH_ASSOC))
                {                                                                                                                            
                      array_push($consulta, array($row["NUM_TRAMI"],$row["CLAVE_CATASTRAL"],$row["NOMBRES"],$row["NOM_PROFE"],$row["DESCRIPTION"],$row["DESC_ESTA_TRA"],$row["OBSE_TRAMITE"]));

                }
            
            
            $json_data["ind"] = true;
            $json_data["row"] = $consulta;
            echo json_encode($json_data);
        }
       
       
?>