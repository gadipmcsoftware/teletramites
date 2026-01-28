<?php
$consulta = array();
//ESTABLECE CONEXION
	 include './Conexion.php';
         $link =  conectarse();
//PARAMETROS WEB_SERVICE
$TIP_IMPUEST    = $_REQUEST["tip_impuest"];
$TERC_EDAD      = $_REQUEST["terc_edad"];
$ARTESANO       = $_REQUEST["artesano"];
$IDENTIFICACION = $_REQUEST["identificacion"];
$FLORICO        = $_REQUEST["florico"];
$ANIO           = $_REQUEST["anio"];
$BASE_IMPO      = $_REQUEST["base_impo"];
$AVALUO         = $_REQUEST["avaluo"];
$UTILIDAD       = $_REQUEST["utilidad"];
$FECHA_INICIO   = $_REQUEST["fecha_inicio"];
$NUM_ANIO_PER   = $_REQUEST["num_anio_pero"];
//PARAMETROS SP
$params = array(     
                 $TIP_IMPUEST,
                 $TERC_EDAD,
                 $ARTESANO,
                 $IDENTIFICACION,
                 $FLORICO,
                 $ANIO,
                 $BASE_IMPO,
                 $AVALUO,
                 $UTILIDAD,
                 $FECHA_INICIO,
                 $NUM_ANIO_PER
    
                ); 
////LLAMA STORE PROCEDURE
$query1 = "{call SP_CALCUALARPAT15(?,?,?,?,?,?,?,?,?,?,?)}";
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
                                           array_push($consulta, array($row["ANIO"],$row["PATRIMONIO"],$row["BASE_IMPO"],$row["IMP_PRIN"],$row["SRV"],$row["MULTA"],$row["TOTAL_PAG"]));

                }
            
            
            $json_data["ind"] = true;
            $json_data["row"] = $consulta;
            echo json_encode($json_data);
        }
       
       
?>