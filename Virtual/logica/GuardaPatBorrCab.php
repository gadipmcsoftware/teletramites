<?php
$consulta = array();
//ESTABLECE CONEXION
	 include './Conexion.php';
         $link =  conectarse();
//PARAMETROS WEB_SERVICE
$PRO_CODIGO         = $_REQUEST["pro_codigo"];
$NUM_TRAMITE        = $_REQUEST["num_tramite"];
$PAT_CAT_CODIGO     = $_REQUEST["pat_cat_codigo"];
$FECHA_INICIO       = $_REQUEST["fecha_inico"];
$PAT_TIPO           = $_REQUEST["pat_tipo"];
$PAT_ESTADO         = $_REQUEST["pat_estado"];
$COD_TIP_ROTU       = $_REQUEST["cod_tip_rotu"];
$PAT_CAL_CODIGO     = $_REQUEST["pat_cal_codigo"];
$PAT_CAL_CODIGOSEC  = $_REQUEST["pat_cat_codigosec"];
$COD_TIP_ESTA       = $_REQUEST["cod_tip_esta"];
$PRO_PERSONERIA     = $_REQUEST["pro_personeria"];
$COD_TIP_ACT        = $_REQUEST["cod_tip_act"];
$COD_PROVINCIA      = $_REQUEST["cod_provincia"];
$COD_CANTON         = $_REQUEST["cod_canton"];
$COD_PARROQ         = $_REQUEST["cod_parroq"];
$NUM_ESTAB          = $_REQUEST["num_estab"];
$PAT_BARRIO         = $_REQUEST["pat_barrio"];
$PAT_DIRECCION      = $_REQUEST["pat_direccion"];
$PAT_NUM_CASA       = $_REQUEST["pat_num_casa"];
$TELEF_ESTAB        = $_REQUEST["telef_estab"];
$NOM_COMER          = $_REQUEST["nom_comer"];
$CAT_PAT_CAT_CODIGO = $_REQUEST["cat_pat_cat_codigo"];
$COD_TAM            = $_REQUEST["cod_tam"];
$DECLARA_IVA        = $_REQUEST["declara_iva"];
$LLEVA_CONTA        = $_REQUEST["lleva_conta"];
$DECLARA_REN        = $_REQUEST["declara_ren"];
$NUM_TRAMI          = $_REQUEST["num_trami"];
$CALF_ARTE          = $_REQUEST["calf_arte"];
$APLI_TERCE         = $_REQUEST["apli_terce"];
$ACCION             = $_REQUEST["accion"];


//PARAMETROS SP

$params = array(   
                 $PRO_CODIGO,      
                 $NUM_TRAMITE ,
                 $PAT_CAT_CODIGO ,                 
                 $FECHA_INICIO,    
                 $PAT_TIPO,      
                 $PAT_ESTADO,
                 $COD_TIP_ROTU,
                 $PAT_CAL_CODIGO,
                 $PAT_CAL_CODIGOSEC,
                 $COD_TIP_ESTA,
                 $PRO_PERSONERIA,
                 $COD_TIP_ACT,
                 $COD_PROVINCIA,
                 $COD_CANTON,
                 $COD_PARROQ,
                 $NUM_ESTAB,
                 $PAT_BARRIO,
                 $PAT_DIRECCION,
                 $PAT_NUM_CASA,
                 $TELEF_ESTAB,
                 $NOM_COMER,
                 $CAT_PAT_CAT_CODIGO,
                 $COD_TAM,
                 $DECLARA_IVA,
                 $LLEVA_CONTA,
                 $DECLARA_REN,
                 $NUM_TRAMI,
                 $CALF_ARTE,
                 $APLI_TERCE,
                 $ACCION
               ); 
////LLAMA STORE PROCEDURE

$query1 = "{call SP_GUARDARPATBORRA( ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
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
                      array_push($consulta, array($row["errNumber"],$row["errSeverity"],$row["errState"],$row["errProcedure"],$row["errLine"],$row["errMessage"],$row["COD_PAT_BORRA"]));
//                        echo $row["clave_catastral"];
                }
            
            
            $json_data["ind"] = true;
            $json_data["row"] = $consulta;
            echo json_encode($json_data);
        }
       
       
?>