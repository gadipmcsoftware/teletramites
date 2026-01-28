<?php
$consulta = array();
//ESTABLECE CONEXION
	 include './Conexion.php';
         $link =  conectarse();
//PARAMETROS WEB_SERVICE
$PRO_CODIGO      = $_REQUEST["pro_codigo"];
$TIP_EXEPC       = $_REQUEST["tip_exepc"];
$APLI_EXO        = $_REQUEST["apli_exo"];
$PORCE_EXO       = $_REQUEST["porce_exo"];
$ESTA_CIVI       = $_REQUEST["esta_civil"];
$CED_CONYU       = $_REQUEST["ced_conyu"];
$NOMB_CONYU      = $_REQUEST["nomb_conyu"];
$APELL_CONYU     = $_REQUEST["apell_conyu"];
$EMAIL_CONYU     = $_REQUEST["email_conyu"];
$FECNAC_CONYU    = $_REQUEST["fecnac_conyu"];
$EDAD_CONYU	 = $_REQUEST["edad_conyu"];
$TELEF_CONYU	 = $_REQUEST["telef_conyu"];
$USR_MODIFICA	 = $_REQUEST["usr_modifica"];
//PARAMETROS SP

$params = array(   
                 $PRO_CODIGO,      
                 $TIP_EXEPC ,     
                 $APLI_EXO,    
                 $PORCE_EXO,    
                 $ESTA_CIVI ,  
                 $CED_CONYU,
                 $NOMB_CONYU,
                 $APELL_CONYU,
                 $EMAIL_CONYU,
                 $FECNAC_CONYU,
                 $EDAD_CONYU,
                 $TELEF_CONYU,
                 $USR_MODIFICA
               ); 
////LLAMA STORE PROCEDURE

$query1 = "{call SP_GUARDAEXEPCIONES(?,?,?,?,?,?,?,?,?,?,?,?,?)}";
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
