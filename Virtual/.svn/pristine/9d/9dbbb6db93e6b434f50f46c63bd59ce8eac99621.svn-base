<?php
$consulta = array();
//ESTABLECE CONEXION
	 include './Conexion.php';
         $link =  conectarse();
//PARAMETROS WEB_SERVICE
$ID  = $_REQUEST["id"];
//PARAMETROS SP
$params = array(     
                 $ID
                ); 
////LLAMA STORE PROCEDURE
$query1 = "{call SP_CONTACTO(?)}";
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
                      array_push($consulta, array($row["PRO_CODIGO"],$row["PRO_NOMBRE"],$row["PRO_APELLIDO"],$row["PRO_TELEFONO"],$row["PRO_CORREO"],$row["PRO_DIRECCION"],$row["COD_PROVINCIA"],$row["COD_CANTON"],$row["COD_PARROQ"],$row["PRO_PERSONERIA"],$row["PRO_EXONERADO"],$row["PRO_3PORCEN"],$row["PRO_DISCAPACIDAD"],$row["PRO_DIS_PORCEN"],$row["NOM_PROVINCIA"],$row["NOM_CANTON"],$row["NOM_PARROQ"],$row["PRO_IDENTIFICACION"]));

                }
            
            
            $json_data["ind"] = true;
            $json_data["row"] = $consulta;
            echo json_encode($json_data);
        }
       
       
?>