<?php
$conexion = new mysqli("mysql-server", "root", "rootpassword", "midb");

if ($conexion->connect_error) {
    die("conexion fallida: " . $conexion->connect_error);
}
?>