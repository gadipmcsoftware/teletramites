<?php
header("Content-type: application/json; charset=utf-8");
//ESTABLECE CONEXION
	 include '../logica/Conexion.php';
         $link =  conectarse();
//PARAMETROS WEB_SERVICE
$PREDIO     = $_REQUEST["clave_catastral"];
//PARAMETROS SP
$params = array(     
                 $PREDIO
                );

////LLAMA STORE PROCEDURE
$query1 = "{call SP_DATOSPREDIOREGISTRO(?)}";
$result1_predio=sqlsrv_query($link,$query1,$params);
if( $result1_predio === false) {
    if( ($errors = sqlsrv_errors() ) != null)  
            {  
               foreach( $errors as $error)  
               {  
                   $error_predio_data["SQLSTATE"] =$error['SQLSTATE'];
                   $error_predio_data["code"] =$error['code'];
                   $error_predio_data["message"] =$error['message'];
                  
               }  
            }
          // Cerrar la conexión.
          sqlsrv_close( $link );
          echo json_encode($error_predio_data);
   

}
else{
    $objPredio=new stdClass();
    $Listapredio = [];
    while ( $row = sqlsrv_fetch_array( $result1_predio, SQLSRV_FETCH_ASSOC))
     {
         $datos_predio=new stdClass();
         $datos_predio->clave_catastral=$row["clave_catastral"];
         $datos_predio->clave_padre=$row["clave_padre"];
         $datos_predio->estado=$row["estado"];
         $datos_predio->tipo_predio=$row["tipo_predio"];
         $datos_predio->numero_predio=$row["numero_predio"];
         $datos_predio->parroquia=$row["parroquia"];
         $datos_predio->direccion=$row["direccion"];
         $datos_predio->tip_propiedad=$row["tip_propiedad"];
         $datos_predio->superficie_construccion=$row["superficie_construccion"];
         $datos_predio->superficie_terreno=$row["superficie_terreno"];
         $datos_predio->avaluo_total=$row["avaluo_total"];
         $datos_predio->valor_construccion=$row["valor_construccion"];
         $datos_predio->tipo=$row["TIPO"];
         $datos_predio->linderos=$row["LINDEROS"];
         $Listapredio[]=$datos_predio;
     }
     $objPredio->listapredio=$Listapredio;
     // Cerrar la conexión.
     sqlsrv_close( $link );
//     echo json_encode($objPredio);
}
$link_alcabala =  conectarse();
//PARAMETROS SP
$params_alcabala = array(     
                 $PREDIO
                );
////LLAMA STORE PROCEDURE
$query_alcabala = "{call SP_DATOSALCABALAREGISTRO(?)}";
$result1_alcabala=sqlsrv_query($link_alcabala,$query_alcabala,$params_alcabala);
if( $result1_alcabala === false) {
    if( ($errors = sqlsrv_errors() ) != null)  
            {  
               foreach( $errors as $error)  
               {  
                   $error_alcabala_data["SQLSTATE"] =$error['SQLSTATE'];
                   $error_alcabala_data["code"] =$error['code'];
                   $error_alcabala_data["message"] =$error['message'];
                  
               }  
            }
          // Cerrar la conexión.
          sqlsrv_close( $link_alcabala );
          echo json_encode($error_alcabala_data);
   

}
else{
     $objAlcabalaPlusva=new stdClass();
     $ListAlcabalaPlusva = [];
     while ( $row_alcabala = sqlsrv_fetch_array( $result1_alcabala, SQLSRV_FETCH_ASSOC))
     {
         $datos_alcabalaplusva=new stdClass();
         $datos_alcabalaplusva->codigo=$row_alcabala["CODIGO"];
         $datos_alcabalaplusva->fecha_pago=$row_alcabala["FECHA_PAGO"];
         $datos_alcabalaplusva->otorga=$row_alcabala["OTORGA"];
         $datos_alcabalaplusva->a_favor=$row_alcabala["A_FAVOR"];
         $datos_alcabalaplusva->cuantia=$row_alcabala["CUANTIA"];
         $datos_alcabalaplusva->concepto=$row_alcabala["CONCEPTO"];
         $datos_alcabalaplusva->total_pagar=$row_alcabala["TOTAL_PAGAR"];
         $datos_alcabalaplusva->estado=$row_alcabala["ESTADO"];
         $datos_alcabalaplusva->tipo=$row_alcabala["TIPO"];
         $ListAlcabalaPlusva[]=$datos_alcabalaplusva;
     }
     $objAlcabalaPlusva->listalcabalaplusva=$ListAlcabalaPlusva;
//     $oputput['values'][] = [
//         $objPredio,
//         $objAlcabalaPlusva,
//
//         
//      ];
          // Cerrar la conexión.
     sqlsrv_close( $link_alcabala );
//     echo json_encode($oputput,true);
}
$link_impuesto =  conectarse();
//PARAMETROS SP
$params_impuesto = array(     
                 $PREDIO
                );
////LLAMA STORE PROCEDURE
$query_impuesto = "{call SP_DATOSIMPUESTO(?)}";
$result1_impuesto=sqlsrv_query($link_impuesto,$query_impuesto,$params_impuesto);
if( $result1_impuesto === false) {
    if( ($errors = sqlsrv_errors() ) != null)  
            {  
               foreach( $errors as $error)  
               {  
                   $error_impuesto_data["SQLSTATE"] =$error['SQLSTATE'];
                   $error_impuesto_data["code"] =$error['code'];
                   $error_impuesto_data["message"] =$error['message'];
                  
               }  
            }
          // Cerrar la conexión.
          sqlsrv_close( $link_impuesto );
          echo json_encode($error_impuesto_data);
   

}
else{
     $objImpuesto=new stdClass();
     $ListImpuesto = [];
     while ( $row_impuesto = sqlsrv_fetch_array( $result1_impuesto, SQLSRV_FETCH_ASSOC))
     {
         $datos_impuesto=new stdClass();
         $datos_impuesto->comprobante=$row_impuesto["Comprobante"];
         $datos_impuesto->contribuyente=$row_impuesto["Contribuyente"];
         $datos_impuesto->cedula=$row_impuesto["Cedula"];
         $datos_impuesto->sitio=$row_impuesto["Sitio"];
         $datos_impuesto->avaluo=$row_impuesto["Avaluo"];
         $datos_impuesto->total_pagado=$row_impuesto["Total_Pagado"];
         $datos_impuesto->fecha_pago=$row_impuesto["FECHA_PAGO"];
         $datos_impuesto->clave_anterior=$row_impuesto["Clave_anterior"];
         $datos_impuesto->anio=$row_impuesto["Anio"];
         $datos_impuesto->tipo=$row_impuesto["Tipo"];
         $ListImpuesto[]=$datos_impuesto;
     }
     $objImpuesto->listaimpuesto=$ListImpuesto;
     $oputput['values'][] = [
         $objPredio,
         $objAlcabalaPlusva,
         $objImpuesto,
         
      ];
          // Cerrar la conexión.
     sqlsrv_close( $link_impuesto );
     echo json_encode($oputput,true);
}