<?php
$consulta = array();
//ESTABLECE CONEXION
	 include './Conexion.php';
         $link =  conectarse();
//PARAMETROS WEB_SERVICE
$ACTO            = $_REQUEST["acto"];
$CALI_COMPA      = $_REQUEST["cali_compa"];
$LUGAR_INSCR     = $_REQUEST["lugar_inscr"];
$NOTARIA         = $_REQUEST["notaria"];
$FECHA_INSCRIP   = $_REQUEST["fecha_inscrip"];
$SUPERFICIE      = $_REQUEST["superficie"];
$LUGAR_REGIS     = $_REQUEST["lugar_regis"];
$LIBRO           = $_REQUEST["libro"];
$REGISTRO_PRO    = $_REQUEST["registro_pro"];
$FECHA_REGI      = $_REQUEST["fecha_regi"];
$SECTOR          = $_REQUEST["sector"];
$FOLIO           = $_REQUEST["folio"];
$FOJA            = $_REQUEST["foja"];
$CLAVE_CATASTRAL = $_REQUEST["clave_catastral"];
$APELLIDOS       = $_REQUEST["apellidos"];
$NOMBRES         = $_REQUEST["nombres"];
$CUANTIA         = $_REQUEST["cuantia"];
$NAME            = $_REQUEST["name"];
$IP_ACTUALIZA    = $_REQUEST["ip_actualiza"];
$CED_ACTUALIZA   = $_REQUEST["ced_actualiza"];

//PARAMETROS SP

$params = array(   
                 $ACTO,      
                 $CALI_COMPA ,
                 $LUGAR_INSCR ,                 
                 $NOTARIA,    
                 $FECHA_INSCRIP,    
                 $SUPERFICIE  ,  
                 $LUGAR_REGIS ,
                 $LIBRO,
                 $REGISTRO_PRO,
                 $FECHA_REGI,
                 $SECTOR,
                 $FOLIO,
                 $FOJA,
                 $CLAVE_CATASTRAL,
                 $APELLIDOS,
                 $NOMBRES,
                 $CUANTIA,
                 $NAME,
                 $IP_ACTUALIZA,
                 $CED_ACTUALIZA
               ); 
////LLAMA STORE PROCEDURE

$query1 = "{call SP_GUARDARINFOLEGAL( ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
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