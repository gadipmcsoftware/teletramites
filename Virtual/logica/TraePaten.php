<?php
$consulta = array();
//ESTABLECE CONEXION
	 include './Conexion.php';
         $link =  conectarse();
//PARAMETROS WEB_SERVICE
$NUM_TRAMITE  = $_REQUEST["num_tramite"];
$INDICE       = $_REQUEST["indice"];
//PARAMETROS SP
$params = array(     
                 $NUM_TRAMITE,
                 $INDICE
                ); 
////LLAMA STORE PROCEDURE
$query1 = "{call SP_TRAEPATBORRA(?,?)}";
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
             if ($INDICE==0){
                 while ( $row = sqlsrv_fetch_array( $result1, SQLSRV_FETCH_ASSOC))
                {                                                                                                                            
                      array_push($consulta, array($row["COD_PAT_GEN"],$row["COD_TIP_ROTULO"],$row["PAT_CAL_CODIGO"],$row["COD_TIP_ESTA"],$row["PAT_CAT_CODIGO"],$row["PRO_PERSONERIA"],$row["COD_TIP_ACT"],$row["COD_PROVINCIA"],$row["COD_CANTON"],$row["COD_PARROQ"],$row["NUM_ESTAB"],$row["PAT_BARRIO"],$row["PAT_DIRECCION"],$row["PAT_NUM_CASA"],$row["TELEF_ESTAB"],$row["CORDE_X"],$row["CORDE_Y"],$row["PAT_CAL_CODIGOSEC"],$row["FECHA_INICIO"],$row["NOM_COMER"],$row["CAT_PAT_CAT_CODIGO"]));

                } 
             }
              if ($INDICE==1){
                   while ( $row = sqlsrv_fetch_array( $result1, SQLSRV_FETCH_ASSOC))
                   {  
                         array_push($consulta, array($row["COD_INF_CONTA"],$row["COD_TIP_EMI"],$row["COD_PAT_BORRA"],$row["COD_TAM"],$row["DECLARA_IVA"],$row["LLEVA_CONTA"],$row["FECH_VENC_ART"],$row["IS_TRASNFER"],$row["DECLARA_REN"],$row["CALF_ARTE"],$row["APLI_TERCE"]));
                   }    
                  
                  
           
              }
              if ($INDICE==2){
                  while ( $row = sqlsrv_fetch_array( $result1, SQLSRV_FETCH_ASSOC))
                   {  
                         array_push($consulta, array($row["COD_CONTA_BOORA"],$row["COD_PAT_BORRA"],$row["CAPI_PROPIO"],$row["CAPITAL_AJENO"],$row["CAPITAL_GIRO"],$row["INGRESO"],$row["GASTO"],$row["ACTIVO_CORRIENTE"],$row["ACTIVO_FIJO"],$row["ACT_NOCORRIENTE"],$row["COSTO_VENTA"],$row["GTO_ADM_VENTA"],$row["GTO_NO_OPERACION"],$row["BASE_IMP"],$row["PAT_NETO"],$row["BASEPAT"],$row["PASIVO_CONTINGENTE"],$row["AVALUO_PROPIEDAD"],$row["PAT_PORCENTAJE"],$row["ACTIVO_100"],$row["PATENTE_100"],$row["ANIO"],$row["TOTAL_INGRESO"],$row["TOTAL_ACTIVO"]));
                   }   
              }
             
               
            
            
            $json_data["ind"] = true;
            $json_data["row"] = $consulta;
            echo json_encode($json_data);
        }
       
       
?>