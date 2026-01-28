<?php
$consulta = array();
//ESTABLECE CONEXION
	 include './Conexion.php';
         $link =  conectarse();
//PARAMETROS WEB_SERVICE
$CED_PROFE       = $_REQUEST["ced_profe"];
$NOM_PROFE       = $_REQUEST["nom_profe"];
$APELLI_PROFE    = $_REQUEST["apelli_profe"];
$DIREC_PROFE     = $_REQUEST["direc_profe"];
$TELEF_PROFE     = $_REQUEST["telef_profe"];
$EMAIL_PROFE     = $_REQUEST["email_profe"];
$NOTI_EMAIL      = $_REQUEST["noti_email"];
$CAMBI_CLAVE     = $_REQUEST["cambi_clave"];
$CLAVE           = $_REQUEST["clave"];
$TIT_PROFE       = $_REQUEST["tit_profe"];
$CUI_DOMI        = $_REQUEST["cui_domi"];
$VALID_POFE      = $_REQUEST["valid_profe"];
$SNSIT_PROFE     = $_REQUEST["snsit_profe"];
$PERFIL_PROFE    = $_REQUEST["cod_perfil"];
$ES_CONTRI       = $_REQUEST["es_contri"];
$PRO_CODIGO      = $_REQUEST["pro_codigo"];
$DIR_IP          = $_REQUEST["dir_ip"];
$CREA_PRO        = $_REQUEST["crea_pro"];
$COD_PROVI       = $_REQUEST["cod_provi"];
$COD_CANTON      = $_REQUEST["cod_canton"];
$COD_PARROQ      = $_REQUEST["cod_parroq"];
$PERSONERIA      = $_REQUEST["personeria"];
$ACEPT_SERV      = $_REQUEST["acept_serv"];
$FECHA_NAC       = $_REQUEST["fecha_nac"];
//PARAMETROS SP

$params = array(   
                 $CED_PROFE,      
                 $NOM_PROFE ,
                 $APELLI_PROFE ,                 
                 $DIREC_PROFE,    
                 $TELEF_PROFE ,    
                 $EMAIL_PROFE  ,  
                 $NOTI_EMAIL ,
                 $CAMBI_CLAVE,
                 $CLAVE,
                 $TIT_PROFE,
                 $CUI_DOMI,
                 $VALID_POFE,
                 $SNSIT_PROFE,
                 $PERFIL_PROFE,
                 $ES_CONTRI,
                 $PRO_CODIGO,
                 $DIR_IP,
                 $CREA_PRO,
                 $COD_PROVI,
                 $COD_CANTON,
                 $COD_PARROQ,
                 $PERSONERIA,
                 $ACEPT_SERV,
                 $FECHA_NAC
               ); 
////LLAMA STORE PROCEDURE

$query1 = "{call SP_GUARDARPROFE( ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
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