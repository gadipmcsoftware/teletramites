<?php
$consulta = array();
//ESTABLECE CONEXION
	 include './Conexion.php';
         $link =  conectarse();
//PARAMETROS WEB_SERVICE
$INDICE          = $_REQUEST["indice"];
$NUM_TRAMI       = $_REQUEST["num_trami"];
$NAME            = $_REQUEST["name"];
$PRO_CODIGO      = $_REQUEST["pro_codigo"];
$DESC_ADJUNT     = $_REQUEST["desc_adjunt"];
$MENSANJE        = $_REQUEST["mensaje"];
$ARCHIVO         = $_REQUEST["archivo"];
//PARAMETROS SP

$params = array(   
                 $INDICE,      
                 $NUM_TRAMI ,     
                 $NAME,     
                 $PRO_CODIGO  ,  
                 $DESC_ADJUNT ,
                 $MENSANJE,
                 $ARCHIVO
               ); 
////LLAMA STORE PROCEDURE

$query1 = "{call SP_GUARDARADUNTO( ?,?,?,?,?,?,?)}";
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