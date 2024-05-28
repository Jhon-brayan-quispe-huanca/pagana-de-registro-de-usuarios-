<?php
include_once "../clases/conexionDB.php";
$conexion = new ConexionDB();
$conexion -> conectar();
print_r($conexion);