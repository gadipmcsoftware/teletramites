<?php
$consulta = array();
//ESTABLECE CONEXION
	 include './Conexion.php';
         $link =  conectarse();
//PARAMETROS WEB_SERVICE
$PROVINCIA       = $_REQUEST["provincia"];
$CANTON          = $_REQUEST["canton"];
//PARAMETROS SP
$params = array(     
                 $PROVINCIA,
                 $CANTON
                ); 
////LLAMA STORE PROCEDURE
$query1 = "{call SP_TRAEPARROQUIAS(?,?)}";
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
                      array_push($consulta, array($row["COD_PROVINCIA"],$row["COD_CANTON"],$row["COD_PARROQ"],$row["NOM_PARROQ"],$row["PARR_CONEXION"]));

                }
            
            
            $json_data["ind"] = true;
            $json_data["row"] = $consulta;
            echo json_encode($json_data);
        }
       
       
?>