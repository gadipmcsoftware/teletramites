<?php
$consulta = array();
//ESTABLECE CONEXION
	 include './Conexion.php';
         $link =  conectarse();
//PARAMETROS WEB_SERVICE
$LIN_NOMBRE      = $_REQUEST["lin_nombre"];
$LIN_DESCRIPCION = $_REQUEST["lin_descripcion"];
$SECTOR          = $_REQUEST["sector"];
$CLAVE_CATASTRAL = $_REQUEST["clave_catastral"];

//PARAMETROS SP

$params = array(   
                 $LIN_NOMBRE,      
                 $LIN_DESCRIPCION,
                 $SECTOR,                 
                 $CLAVE_CATASTRAL,    
               ); 
////LLAMA STORE PROCEDURE

$query1 = "{call SP_GUARDAR_LINDERO( ?,?,?,?)}";
$result1=sqlsrv_query($link, $query1, $params);

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
                      array_push($consulta, array($row["errNumber"],$row["errSeverity"],$row["errState"],$row["errProcedure"],$row["errLine"],$row["errMessage"]));
//                        echo $row["clave_catastral"];
                }
            
            
            $json_data["ind"] = true;
            $json_data["row"] = $consulta;
            echo json_encode($json_data);
        }
       
       
?>