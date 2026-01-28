<?php
//require_once '../config/global.php';
//
//session_start();

if (!isset($_GET['file']) || empty($_GET['file'])) {
  exit();
}

/* DECLARAR VARIABLES DE FTP */
$root = "Q:/documentos/";
$file = basename($_GET['file']);
$anio = substr($file, 0,4);
$path = $root.$anio."/".$file;
$type = '';

/* DECLARAR VARIABLES DE CONEXIÓN */
//$vhost = USERHOST;
//$vport = USERPORT;
//$vdb = USERDB;
//$vuser = USERUSER;
//$vpass = USERPASS;

//$conn = pg_connect("host=$vhost port=$vport dbname=$vdb user=$vuser password=$vpass");
//
//if(!$conn) {
//  echo "ER204 - No se pudo conectar a la base de datos.";
//}
//else {
//  $log1 = $_SERVER['REMOTE_ADDR'];
//  $ses1 = "Visualizacion de Archivo";
//  $ses2 = substr($file,0,9);
//  $ses3 = $_SESSION['usuario_usuario'];
//  $res2 = pg_query($conn, "INSERT INTO public.sesiones (ip_sesiones,ses1,ses2,ses3) VALUES('$log1', '$ses1', '$ses2', '$ses3'); ");
//  pg_close($conn);
//}

if (is_file($path)) {
  $size = filesize($path);
 
  if (function_exists('mime_content_type')) {
    $type = mime_content_type($path);
  }
  else if (function_exists('finfo_file')) {
    $info = finfo_open(FILEINFO_MIME);
    $type = finfo_file($info, $path);
    finfo_close($info);
  }
 
  /*if ($type == '') {
    $type = "application/force-download";
  }*/
 
  // Definir headers
  //header("Content-Type: $type");
  header('Content-type: application/pdf');
//  header("Content-Disposition: attachment; filename=$file");
//  header("Content-Transfer-Encoding: binary");
//  header("Content-Length: " . $size);
 
  // Descargar archivo
  //readfile($path);
  echo pg_unescape_bytea(readfile($path));
}
else {
  die("El archivo no existe.");
  //echo '<script>alert("El archivo no existe.")</script>';
}
 
?>