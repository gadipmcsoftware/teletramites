<?php
$consulta = array();
//ESTABLECE CONEXION
	 include './Conexion.php';
         $link =  conectarse();
//PARAMETROS WEB_SERVICE
$TIP_TRA       = $_REQUEST["Cod_tip_tra"];
$PERSONERIA    = $_REQUEST["pro_personeria"];
//PARAMETROS SP
$params = array(     
                 $TIP_TRA,
                 $PERSONERIA
                ); 
////LLAMA STORE PROCEDURE
$query1 = "{call SP_TRAEREQUISITOS(?,?)}";
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
                      array_push($consulta, array($row["COD_REQU"],$row["PRO_PERSONERIA"],$row["COD_TIP_TRA"],$row["COD_TIP"],$row["DESC_TIP"],$row["ESTA_REQUISIRO"],$row["COD_EXT"],$row["DESC_EXT"],$row["EXT"],$row["REQ_OBLI"],$row["CONDI_REG"],$row["MENSA_REQI"]));

                }
            
            
            $json_data["ind"] = true;
            $json_data["row"] = $consulta;
            echo json_encode($json_data);
        }
       
       
?>