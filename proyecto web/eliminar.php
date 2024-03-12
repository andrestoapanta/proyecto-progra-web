<?php
include("config/conexion.php");

$cod_equipo = $_GET['cod_equipo'];

$sql = "DELETE FROM equipo WHERE cod_equipo='$cod_equipo'";

$conn->query($sql);
$conn->close();

header("Location: consulta_inventario.php");