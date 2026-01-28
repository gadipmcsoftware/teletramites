<?php
$consulta = array();
//ESTABLECE CONEXION
	 include './Conexion.php';
         $link =  conectarse();
//PARAMETROS WEB_SERVICE
$ACCION         = $_REQUEST["accion"];
$COD_RANGO      = $_REQUEST["cod_rango"];
$BANDA_DESDE    = $_REQUEST["banda_desde"];
$BANDA_HASTA    = $_REQUEST["banda_hasta"];
$BANDA_IMPO     = $_REQUEST["banda_impo"];
$COD_TIP_PRE    = $_REQUEST["cod_tip_pre"];
$COD_BIENIO     = $_REQUEST["cod_bienio"];
$USUARIO        = $_REQUEST["usuario"];
//PARAMETROS SP

$params = array(   
                 $ACCION,      
                 $COD_RANGO ,     
                 $BANDA_DESDE,     
                 $BANDA_HASTA  ,  
                 $BANDA_IMPO ,
                 $COD_TIP_PRE,
                 $COD_BIENIO,
                 $USUARIO
               ); 
////LLAMA STORE PROCEDURE

$query1 = "{call SP_GUARDAR_BANDAS( ?,?,?,?,?,?,?,?)}";
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
                      array_push($consulta, array($row["errMessage"]));
//                        echo $row["clave_catastral"];
                }
            
            
            $json_data["ind"] = true;
            $json_data["row"] = $consulta;
            echo json_encode($json_data);
        }
       
       
?>
