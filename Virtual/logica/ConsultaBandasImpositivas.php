<?php
$consulta = array();
//ESTABLECE CONEXION
	 include './Conexion.php';
         $link =  conectarse();
//PARAMETROS WEB_SERVICE
$COD_BIENIO       = $_REQUEST["cod_bienio"];
//PARAMETROS SP
$params = array(     
                 $COD_BIENIO
                ); 
////LLAMA STORE PROCEDURE
$query1 = "{call dbo.SP_TRAEBANDAS(?)}";
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
                      array_push($consulta, array(
                          $row["Cod_rango"],//0
                          $row["Ban_desde"],//1
                          $row["Ban_hasta"],//2
                          floatval($row["Ban_imposi"]),//3
                          $row["Tip_Banda"]//4
                          
                          ));
                }
            
            $json_data["ind"] = true;
            $json_data["row"] = $consulta;
            echo json_encode($json_data);
        }

?>

