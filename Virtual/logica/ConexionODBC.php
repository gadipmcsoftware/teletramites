<?php
function conectarseODBC(){
    $user = 'sim2001';
    $pass = 'cayambe';
    $conn = "Base_sim";
$dsn = "DRIVER={ODBC Driver 18 for SQL Server};SERVER=172.23.7.22;DATABASE=sim2001;Encrypt=yes;TrustServerCertificate=yes;APP=MyApp;UseCursor=1;";
    // Open connection
    $db_connect = odbc_connect($dsn, $user, $pass);

    // Check for successful connection
    if ( $db_connect ) {
        return $db_connect; 
//        echo 'Beer time!';
    } else {
        die('Error connecting...');
//        header("Location: http://172.23.25.6/Simulacion/error.php");
    }
}


?>
