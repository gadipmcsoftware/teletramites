<?php
$consulta = array();

try {
    // ESTABLECE CONEXIÓN
    include './ConexionODBC.php';
    $link = conectarseODBC();
    
    if (!$link) {
        throw new Exception("No se pudo establecer conexión: " . odbc_errormsg());
    }

    // PARÁMETROS DEL WEB SERVICE
    $TIP_ACCION = $_REQUEST["TIP_ACCION"];
    $USUARIO = $_REQUEST["USUARIO"];
    $ID = $_REQUEST["ID"];
    $TIP_DOC = $_REQUEST["TIP_DOC"];
    $ANIO_RELIQ = $_REQUEST["ANIO_RELIQ"];
    $OBSER_PROCESO = $_REQUEST["OBSER_PROCESO"];

    // PARÁMETROS PARA EL SP
    $params = array(
        $TIP_ACCION,
        $USUARIO,
        $ID,
        $TIP_DOC,
        $ANIO_RELIQ,
        $OBSER_PROCESO
    );

    // PREPARAR Y EJECUTAR LA CONSULTA
    $query1 = odbc_prepare($link, '{call SP_SIMULACION(?,?,?,?,?,?)}');

    if (!$query1) {
        throw new Exception("Error al preparar la consulta: " . odbc_errormsg($link));
    }

    $result1 = odbc_execute($query1, $params);

    if (!$result1) {
        $errorMessage = odbc_errormsg($link);
        $errorCode = odbc_error($link);
        
        // RESPUESTA EN CASO DE ERROR
        $json_data = [
            "SQLSTATE" => $errorCode,
            "message" => $errorMessage,
            "ind" => false
        ];
        echo json_encode($json_data);
        exit;
    }

    // PROCESAR RESULTADOS
    while ($row = odbc_fetch_array($query1)) {
        $consulta[] = [
            "COD_AUDITA" => $row["COD_AUDITA"],
            "DEC_AUDITA" => $row["DEC_AUDITA"],
            "TIP_ACCION" => $row["TIP_ACCION"],
            "ERROR_NUMBER" => $row["ERROR_NUMBER"],
            "ERROR_SEVERITY" => $row["ERROR_SEVERITY"],
            "ERROR_STATE" => $row["ERROR_STATE"],
            "ERROR_PROCEDURE" => $row["ERROR_PROCEDURE"],
            "ERROR_LINE" => $row["ERROR_LINE"],
            "ERROR_MESSAGE" => $row["ERROR_MESSAGE"],
            "USUARIO_PROCE" => $row["USUARIO_PROCE"],
            "FECHA_PROCESA" => $row["FECHA_PROCESA"],
            "CLAVE_GLOBA" => $row["CLAVE_GLOBA"],
            "COD_PROCESO" => $row["COD_PROCESO"]
        ];
    }

    // RESPUESTA EXITOSA
    $json_data = [
        "ind" => true,
        "row" => $consulta
    ];
    echo json_encode($json_data);

} catch (Exception $e) {
    // RESPUESTA EN CASO DE EXCEPCIÓN
    $json_data = [
        "ind" => false,
        "error" => $e->getMessage()
    ];
    echo json_encode($json_data);
}
?>
