<?php
$varianza = array();
//ESTABLECE CONEXION
	 include './Conexion.php';
         $link =  conectarse();
								                      
//LLAMA STORE PROCEDURE
	$query1 = "select year(i.AVA_FECHA) ANIO,SUM(i.IM_TOTAL) Total from IMPUESTOS i 
                        where year(i.AVA_FECHA) between 2009 and 2019
                        and i.IM_ESTADO in('P','F')
                    group by year(i.AVA_FECHA)
                  union
                  select '2020',SUM(s6.TOTAL_PAGAR) ARECAUDAR 
                  from TBL_SIMULACIONV6 s6
                  order by year(i.AVA_FECHA)";
$result1=sqlsrv_query( $link, $query1 );
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
                  array_push($varianza, array($row["ANIO"],$row["Total"]));
            } 
            $json_data["ind"] = true;
            $json_data["row"] = $varianza;
            echo json_encode($json_data);
        }
       
       
?>