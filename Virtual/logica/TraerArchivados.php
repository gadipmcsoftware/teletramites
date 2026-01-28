<?php
$consulta = array();
//ESTABLECE CONEXION
	 include './Conexion.php';
         $link =  conectarse();
//PARAMETROS WEB_SERVICE
$ID  = $_REQUEST["id"];
$USR_EXT  = $_REQUEST["UsrExt"];
//PARAMETROS SP
$params = array(     
                 $ID,
                 $USR_EXT
                ); 
////LLAMA STORE PROCEDURE
$query1 = "{call SP_TRAERARCHIVADOS(?,?)}";
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
                      array_push($consulta, array($row["NUM_TRAMI"],$row["CED_PROFE"],$row["NOM_PROFE"],$row["DESC_TIP_TRA"],$row["NOMBRE"],$row["DESC_ESTA_TRA"],$row["DESCRIPTION"],$row["CLAVE_CATASTRAL"],$row["OBSE_TRAMITE"],$row["COD_NOTIFI"]));

                }
            
            
            $json_data["ind"] = true;
            $json_data["row"] = $consulta;
            echo json_encode($json_data);
        }
       
       
?>