<?php
$consulta = array();
//ESTABLECE CONEXION
	 include './ConexionODBC.php';
         $link =  conectarseODBC();
//PARAMETROS WEB_SERVICE
$TIP_ACCION     = $_REQUEST["TIP_ACCION"];
$USUARIO        = $_REQUEST["USUARIO"];
$ANIO           = $_REQUEST["ANIO"];
$PROCESO        = $_REQUEST["PROCESO"];
//PARAMETROS SP
$params = array(     
                 $TIP_ACCION,
                 $USUARIO,
                 $ANIO,
                 $PROCESO
               ); 
$query1     = odbc_prepare($link, '{call SP_EMITIR_IMPUESTO(?,?,?,?)}');
$result1    = odbc_execute($query1,$params);

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

