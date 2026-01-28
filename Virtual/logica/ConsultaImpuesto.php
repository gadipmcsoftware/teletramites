<?php
while (ob_get_level()) { ob_end_flush(); }
ob_implicit_flush(true);

$consulta = array();
//ESTABLECE CONEXION
include './Conexion.php';
$link = conectarse();
echo "A"; flush();

$ID = $_REQUEST["id"];
$TIP_CON = $_REQUEST["tip_con"];
$params = array($ID, $TIP_CON);

echo "B"; flush();
$query1 = "{call dbo.SP_CONSULTA_IMPUESTOPAGO(?,?)}";
$result1 = sqlsrv_query($link, $query1, $params, array("QueryTimeout" => 5));
echo "C"; flush();

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
                          $row["NOMBRE"],//0
                          $row["MESANIO"],//1
                          $row["CLAVE_CATASTRAL"],//2
                          $row["SITIO"],//3
                          floatval($row["TOTAL"]),//4
                          floatval($row["SUBTOTAL"]),//5
                          $row["COSTASJUDICIALES"],//6
                          floatval($row["DESCUENTO"]),//7
                          floatval($row["RECARGO"]),//8
                          floatval($row["INTERESMORA"]),//9
                          $row["NOMBRES"],//10
                          $row["PRO_CODIGO"],//11
                          floatval($row["AVALUO_PROPIEDAD"]),//12
                          floatval($row["IM_MEDICINA"]),//13
                          floatval($row["IM_EDUCACION"]),//14
                          floatval($row["IM_MAGISTERIO"]),//15
                          floatval($row["IM_VIVIENDA"]),//16
                          floatval($row["IM_BORDILLO"]),//17
                          floatval($row["IM_ALCANTA"]),//18
                          floatval($row["IM_ADO_GLOB_2011"]),//19
                          floatval($row["IM_PRINCIPAL"]),//20--
                          floatval($row["IM_BOMBEROS"]),//21
                          floatval($row["IM_PROCESAMIENTO"]),//22
                          floatval($row["IM_SOLARES"]),//23
                          floatval($row["IM_ADOQUI_NUEVO"]),//24
                          $row["LEYANCIANATO"],//25
                          $row["NUM_EMISION"],
                          $row["OBRA"]
                          ));
                }
            
            $json_data["ind"] = true;
            $json_data["row"] = $consulta;
            echo json_encode($json_data);
        }

?>