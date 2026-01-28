<?php
$consulta = array();
//ESTABLECE CONEXION
	 include './Conexion.php';
         $link =  conectarse();
//PARAMETROS WEB_SERVICE
$COD_PERFIL     = $_REQUEST["cod_perfil"];
$USREXT         = $_REQUEST["usr_ext"];
$COD_AREA       = $_REQUEST["cod_area"];
//PARAMETROS SP
$params = array(     
                 $COD_PERFIL,
                 $USREXT,
                 $COD_AREA           
                ); 
////LLAMA STORE PROCEDURE
$query1 = "{call SP_TRAEMENU(?,?,?)}";
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
                      array_push($consulta, array($row["ID_MODULO"],$row["COD_PERFIL"],$row["COD_AREA"],$row["TIT_MODULO"],$row["DESC_MODULO"],$row["ICON_MODULO"],$row["COLOR_MODULO"],$row["ACCION"],$row["ESTA_MODULO"],$row["USREXT"]));

                }
            
            
            $json_data["ind"] = true;
            $json_data["row"] = $consulta;
            echo json_encode($json_data);
        }
       
       
?>