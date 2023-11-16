<?php
require("config.php");


$sql = "SELECT * FROM EMPLEADO";
$resultado = $conexion->query($sql);

while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
    echo "ID: " . $fila['ID'] . ", Nombre: " . $fila['NOMBRE']. ", correo: " . $fila['CORREO'] .", PUESTO: " . $fila['PUESTO'] . ", FECHA INGRESO: " . $fila['FECHAINGRESO'] .  "<br>";
}
?>