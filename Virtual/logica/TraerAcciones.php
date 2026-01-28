<?php
$consulta = array();
//ESTABLECE CONEXION
	 include './Conexion.php';
         $link =  conectarse();
//PARAMETROS WEB_SERVICE
$COD_EST_TRA        = $_REQUEST["cod_esta_tra"];
$COD_TIP_TRA        = $_REQUEST["cod_tip_tra"];
//PARAMETROS SP
$params = array(     
                 $COD_EST_TRA,
                 $COD_TIP_TRA
                ); 
////LLAMA STORE PROCEDURE
$query1 = "{call SP_TRAEACCIONES(?,?)}";
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
                      array_push($consulta, array($row["COD_ACCION"],$row["COD_EST_TRA"],$row["COD_TIP_TRA"],$row["DESC_ACCION"],$row["ACCION_HTML"],$row["ACCION_SQL"],$row["ESTAD_ACCI"],$row["TIT_ACCI"],$row["ICO_ACCI"],$row["NOM_MODAL"],$row["NOM_BODY"]));

                }
            
            
            $json_data["ind"] = true;
            $json_data["row"] = $consulta;
            echo json_encode($json_data);
        }
       
       
?>

