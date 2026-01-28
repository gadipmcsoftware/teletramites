<?php
$consulta = array();
//ESTABLECE CONEXION
	 include './Conexion.php';
         $link =  conectarse();
//PARAMETROS WEB_SERVICE
$ID                 = $_REQUEST["id"];
$CLAVE_CATASTRAL    = $_REQUEST["clave_catastral"];
//PARAMETROS SP
$params = array(     
                 $ID,
                 $CLAVE_CATASTRAL
                ); 
////LLAMA STORE PROCEDURE
$query1 = "{call SP_TRAERTRAMITES(?,?)}";
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
                      array_push($consulta, array($row["NUM_TRAMI"],$row["PRO_CODIGO"],$row["IDENTIFICACION"],$row["NOMBRES"],$row["PRO_TELEFONO"],$row["PRO_CORREO"],$row["CED_PROFE"],$row["NOM_PROFE"],$row["TELEF_PROFE"],$row["EMAIL_PROFE"],$row["COD_TIP_TRA"],$row["DESC_TIP_TRA"],$row["CLAVE_CATASTRAL"],$row["DIRECCION"],$row["TIP_PREDIO"],$row["COD_EST_TRA"],$row["DESC_ESTA_TRA"],$row["OBSE_TRAMITE"],$row["NOTI_EMAIL"],$row["COD_AREA"],$row["SUB_OBLIGA"],$row["REQ_CLAVE"],$row["COD_SUB_TRA"],$row["TRAM_PER"],$row["Tip_COD_TIP_TRA"]));

                }
            
            
            $json_data["ind"] = true;
            $json_data["row"] = $consulta;
            echo json_encode($json_data);
        }
       
       
?>