<?php
$consulta = array();
//ESTABLECE CONEXION
	 include './Conexion.php';
         $link =  conectarse();
//PARAMETROS WEB_SERVICE
$FECHA_INICIAL       = $_REQUEST["f_inicial"];
$FECHA_FINAL  = $_REQUEST["f_final"];
//PARAMETROS SP
$params = array(     
                 $FECHA_INICIAL,
                 $FECHA_FINAL
                ); 
////LLAMA STORE PROCEDURE
$query1 = "{call dbo.SP_CONSULTA_MERCADOS_FACTURADOS(?,?)}";
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
                          $row["MER_CAT_REGISTRO"],//0
                          $row["MER_CAT_ESTADO"],//1
                          $row["NOMBRES"],//2
                          $row["MER_CAT_FECHA_PAGO"],//3
                          $row["MER_CAT_NUMFACTURA"],//4
                          $row["ALICUOTA"],//5
                          $row["CANON"],//6
                          floatval($row["MER_CAT_IVA"]),//7
                          floatval($row["MER_CAT_VALESPECIE"]),//8
                          floatval($row["MER_CAT_RECARGO"]),//9
                          floatval($row["MER_CAT_INTERES"]),//10
                          floatval($row["COSTA_PROCESAL"]),//11
                          floatval($row["MER_CAT_TOTALAVALUO"]),//12
                          floatval($row["MER_CAT_VALMCUADRADO"])//13
                      
                          ));
                }
            
            $json_data["ind"] = true;
            $json_data["row"] = $consulta;
            echo json_encode($json_data);
        }

?>