<?php 
       
     
//ESTABLECE CONEXION
include './Conexion.php';
$link =  conectarse();
//PARAMETROS WEB_SERVICE
$IDENTIFICACION  = $_REQUEST["identificacion"];
$PRO_CODIGO      = $_REQUEST["pro_codigo"];
$NOMBRES         = $_REQUEST["nombres"];
$TELEFONO        = $_REQUEST["telefono"];
$EMAIL           = $_REQUEST["email"];
$DIRECCION       = $_REQUEST["direccion"];
$COVID19         = $_REQUEST["covid19"];
$C_FAMILIAR      = $_REQUEST["c_familiar"];
$ADUL_MAYOR      = $_REQUEST["adul_mayor"];
$NIN_ADOLE       = $_REQUEST["nin_adole"];
$PER_DISCAPACIDAD= $_REQUEST["per_discapacidad"];
$PER_CATASTROFICA= $_REQUEST["per_catastrofica"];
$ANIMALES        = $_REQUEST["animales"];
$NECESIDADES     = $_REQUEST["necesidades"];
$PUE_CODIGO      = $_REQUEST["pue_codigo"];
$MOV_HUMANA      = $_REQUEST["mov_humana"];
$PROCEDENCIA     = $_REQUEST["procedencia"];
$CORDENASX       = $_REQUEST["cordenasx"];
$CORDENASY       = $_REQUEST["cordenasy"];
$PARROQUIA       = $_REQUEST["parroquia"];
$ACTIVIDAD       = $_REQUEST["actividad"];
//PARAMETROS SP
$parametro['IDENTIFICACION']        = $IDENTIFICACION;
$parametro['PRO_CODIGO']            = $PRO_CODIGO;
$parametro['NOMBRES']               = $NOMBRES;
$parametro['TELEFONO']              = $TELEFONO;
$parametro['EMAIL']                 = $EMAIL;
$parametro['DIRECCION']             = $DIRECCION;
$parametro['COVID19']               = $COVID19;
$parametro['C_FAMILIAR']            = $C_FAMILIAR;
$parametro['ADUL_MAYOR']            = $ADUL_MAYOR;
$parametro['NIN_ADOLE']             = $NIN_ADOLE;
$parametro['PER_DISCAPACIDAD']      = $PER_DISCAPACIDAD;
$parametro['PER_CATASTROFICA']      = $PER_CATASTROFICA;
$parametro['ANIMALES']              = $ANIMALES;
$parametro['NECESIDADES']           = $NECESIDADES;
$parametro['PUE_CODIGO']            = $PUE_CODIGO;
$parametro['MOV_HUMANA']            = $MOV_HUMANA;
$parametro['PROCEDENCIA']           = $PROCEDENCIA;
$parametro['CORDENASX']             = $CORDENASX;
$parametro['CORDENASY']             = $CORDENASY;
$parametro['PARROQUIA']             = $PARROQUIA;
$parametro['ACTIVIDAD']             = $ACTIVIDAD;
$procedure_params = array(
            array(&$parametro['IDENTIFICACION'], SQLSRV_PARAM_IN),
            array(&$parametro['PRO_CODIGO'], SQLSRV_PARAM_IN),
            array(&$parametro['NOMBRES'], SQLSRV_PARAM_IN),
            array(&$parametro['TELEFONO'], SQLSRV_PARAM_IN),
            array(&$parametro['EMAIL'], SQLSRV_PARAM_IN),
            array(&$parametro['DIRECCION'], SQLSRV_PARAM_IN),
            array(&$parametro['COVID19'], SQLSRV_PARAM_IN),
            array(&$parametro['C_FAMILIAR'], SQLSRV_PARAM_IN),
            array(&$parametro['ADUL_MAYOR'], SQLSRV_PARAM_IN),
            array(&$parametro['NIN_ADOLE'], SQLSRV_PARAM_IN),
            array(&$parametro['PER_DISCAPACIDAD'], SQLSRV_PARAM_IN),
            array(&$parametro['PER_CATASTROFICA'], SQLSRV_PARAM_IN),
            array(&$parametro['ANIMALES'], SQLSRV_PARAM_IN),
            array(&$parametro['NECESIDADES'], SQLSRV_PARAM_IN),
            array(&$parametro['PUE_CODIGO'], SQLSRV_PARAM_IN),
            array(&$parametro['MOV_HUMANA'], SQLSRV_PARAM_IN),
            array(&$parametro['PROCEDENCIA'], SQLSRV_PARAM_IN),
            array(&$parametro['CORDENASX'], SQLSRV_PARAM_IN),
            array(&$parametro['CORDENASY'], SQLSRV_PARAM_IN),
            array(&$parametro['PARROQUIA'], SQLSRV_PARAM_IN),
            array(&$parametro['ACTIVIDAD'], SQLSRV_PARAM_IN),
            );
//LLAMA STORE PROCEDURE
	$query1 = "EXEC SP_GUARDAREGISTRO @IDENTIFICACION=?,@PRO_CODIGO=?,@NOMBRES=?,@TELEFONO=?,@EMAIL=?,@DIRECCION=?,@COVID19=?,@C_FAMILIAR=?,@ADUL_MAYOR=?,@NIN_ADOLE=?,@PER_DISCAPACIDAD=?,@PER_CATASTROFICA=?,@ANIMALES=?,@NECESIDADES=?,@PUE_CODIGO=?,@MOV_HUMANA=?,@PROCEDENCIA=?,@CORDENASX=?,@CORDENASY=?,@PARROQUIA=?,@ACTIVIDAD=?";
	$stmt = sqlsrv_prepare($link, $query1, $procedure_params);
	if (!sqlsrv_execute($stmt)) {
           if( ($errors = sqlsrv_errors() ) != null)  
            {  
               foreach( $errors as $error)  
               {  
                   $json_data["SQLSTATE"] =$error['SQLSTATE'];
                   $json_data["code"] =$error['code'];
                   $json_data["message"] =$error['message'];
                   $json_data["query1"] =$query1;
//                   $json_data["error"] =$error['SQLSTATE']+" "+$error['message'];
               }  
            }  
          $json_data["ind"] = false;
          echo json_encode($json_data);
        }
        else {
             $json_data["ind"] = true;
//          $json_data["sql"] =$query1;
            echo json_encode($json_data);
        }
        
?>
