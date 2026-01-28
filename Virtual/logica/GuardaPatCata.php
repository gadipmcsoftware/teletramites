<?php
$consulta = array();
//ESTABLECE CONEXION
	 include './Conexion.php';
         $link =  conectarse();
//PARAMETROS WEB_SERVICE
$CAPI_PROPIO        = $_REQUEST["capi_propio"];
$CAPITAL_AJENO      = $_REQUEST["capital_ajeno"];
$CAPITAL_GIRO       = $_REQUEST["capital_giro"];
$INGRESO            = $_REQUEST["ingreso"];
$GASTO              = $_REQUEST["gasto"];
$ACTIVO_CORRIENTE   = $_REQUEST["Activo_corriente"];
$ACTIVO_FIJO        = $_REQUEST["Activo_fijo"];
$ACT_NOCORRIENTE    = $_REQUEST["Act_nocorriente"];
$TOTAL_ACTIVO       = $_REQUEST["total_activo"];
$TOTAL_INGRESO      = $_REQUEST["total_ingreso"];
$COSTO_VENTA        = $_REQUEST["costo_venta"];
$GTO_ADM_VENTA      = $_REQUEST["gto_adm_venta"];
$GTO_NO_OPERACION   = $_REQUEST["gto_no_operacion"];
$BASE_IMP           = $_REQUEST["base_imp"];
$PAT_NETO           = $_REQUEST["pat_neto"];
$PASIVO_CONTINGENTE = $_REQUEST["pasivo_contingente"];
$AVALUO_PROPIEDAD   = $_REQUEST["avaluo_propiedad"];
$PAT_PORCENTAJE     = $_REQUEST["pat_porcentaje"];
$PRO_CODIGO         = $_REQUEST["pro_codigo"];
$NUM_TRAMI          = $_REQUEST["num_trami"];
$PAT_CAT_TOTAL_PAGO = $_REQUEST["pat_cat_total_pago"];
$PAT_IMPTO          = $_REQUEST["pat_impto"];
$MULTA              = $_REQUEST["multa"];
$PAT_ESPECIE        = $_REQUEST["pat_especie"];
$ANIO               = $_REQUEST["anio"];
$COD_PAT_BORRA      = $_REQUEST["Cod_pat_borra"];
$ACCION             = $_REQUEST["accion"];
$COD_CONTA          = $_REQUEST["cod_conta"];
//PARAMETROS SP

$params = array(   
                 $CAPI_PROPIO,      
                 $CAPITAL_AJENO ,
                 $CAPITAL_GIRO ,                 
                 $INGRESO,    
                 $GASTO,      
                 $ACTIVO_CORRIENTE,
                 $ACTIVO_FIJO,
                 $ACT_NOCORRIENTE,
                 $TOTAL_ACTIVO,
                 $TOTAL_INGRESO,
                 $COSTO_VENTA,
                 $GTO_ADM_VENTA,
                 $GTO_NO_OPERACION,
                 $BASE_IMP,
                 $PAT_NETO,
                 $PASIVO_CONTINGENTE,
                 $AVALUO_PROPIEDAD,
                 $PAT_PORCENTAJE,
                 $PRO_CODIGO,
                 $NUM_TRAMI,
                 $PAT_CAT_TOTAL_PAGO,
                 $PAT_IMPTO,
                 $MULTA,
                 $PAT_ESPECIE,
                 $ANIO,
                 $COD_PAT_BORRA,
                 $ACCION,
                 $COD_CONTA
               ); 
////LLAMA STORE PROCEDURE

$query1 = "{call SP_GUARDARCATA( ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
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