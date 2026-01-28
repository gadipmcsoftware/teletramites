<?php
include './Conexion.php';
echo "ANTES\n";
$conn = conectarse();
echo "DESPUES\n";
var_dump($conn);