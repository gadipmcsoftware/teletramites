<?php
        
            //FUNCION QUE PERMITE CONECTARSE A BD SQL SERVER
	function conectarse(){
//            $serverName = "PC-OPARRAGA\SQLEXPRESS"; //serverName\instanceName
            $serverName = "172.23.7.22"; //serverName\instanceName
            $connectionInfo = array( "Database"=>"sim2001", "UID"=>"sim2001", "PWD"=>"cayambe","CharacterSet"=>"UTF-8");
            $conn = sqlsrv_connect( $serverName, $connectionInfo);

            if( $conn ) {
            //     echo "Conexión establecida.<br />";
                return $conn; 
            }else{
            //     echo "Conexión no se pudo establecer.<br />";
            //    die( print_r( sqlsrv_errors(), true));
                header("Location: http://172.23.25.6/Simulacion/error.php");
            }
         }
?>
