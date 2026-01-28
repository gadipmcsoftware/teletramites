<?php
$consulta = array();
//ESTABLECE CONEXION
	 include './Conexion.php';
         $link =  conectarse();
//PARAMETROS WEB_SERVICE
$ID         = $_REQUEST["id"];
$TIP_IMPUE  = $_REQUEST["tip_impue"];
$ANIO       = $_REQUEST["anio"];
//PARAMETROS SP

$params = array(     
                 $ID,
                 $TIP_IMPUE,
                 $ANIO
               ); 
$query1 = "{call SP_EXONERACIONES(?,?,?)}";
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
                      array_push($consulta, array($row["Exo_100"],$row["Exo_50"],$row["Exo_0"],$row["Exo_ot"],$row["Total"]));

                }
            
            
            $json_data["ind"] = true;
            $json_data["row"] = $consulta;
            echo json_encode($json_data);
        }
       
       
?>