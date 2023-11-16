<?php
require("config.php");

//$conexion = new PDO('oci:dbname=xe', 'hr', 'root');

//echo $conexion;
$sql = "SELECT * FROM EMPLEADO";
$resultado = $conexion->query($sql);

while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
    echo "ID: " . $fila['ID'] . ", Nombre: " . $fila['NOMBRE']; //. ", correo: " . $fila['CORREO'] .", PUESTO: " . $fila['PUESTO'] . ", FECHA INGRESO: " . $fila['FECHAINGRESO'] .  "<br>";
}
?>