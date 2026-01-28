<?php
$consulta = array();
//ESTABLECE CONEXION
	 include './Conexion.php';
         $link =  conectarse();
//PARAMETROS WEB_SERVICE
$ID         = $_REQUEST["id"];
$ANIO       = $_REQUEST["anio"];
$TIP_IMPUE  = $_REQUEST["tip_predio"];
//PARAMETROS SP

$params = array(     
                 $ID,
                 $ANIO,
                 $TIP_IMPUE
               ); 
$query1 = "{call SP_DISTRIBUCION(?,?,?)}";
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
                      array_push($consulta, array($row["TIP_PREDIO"],$row["N_PREDIOS"]));

                }
            
            
            $json_data["ind"] = true;
            $json_data["row"] = $consulta;
            echo json_encode($json_data);
        }
       
       
?>

