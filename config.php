<?php
$usuario = 'hr';
$contrasena = 'root';
$conexionString = 'oci:dbname=xe;charset=UTF8';

try {
    $conexion = new PDO($conexionString, $usuario, $contrasena);
    // Configurar el modo de manejo de errores a excepciones
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
    //return $conexion;
    //echo 'Conexión exitosa a Oracle';
} catch (PDOException $e) {
    echo 'Error de conexión: ' . $e->getMessage();
}
?>