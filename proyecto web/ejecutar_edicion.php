<?php
include("config/conexion.php");

// Se obtienen los datos del formulario
$cod_equipo = $_POST['cod_equipo'];
$nom_equipo = $_POST['nom_equipo'];
$existencias = $_POST['existencias'];
$cod_categoria = $_POST['cod_categoria'];
$precio = $_POST['precio'];

$sql = "UPDATE equipo 
        SET nom_equipo = '$nom_equipo', existencias = '$existencias', cod_categoria = '$cod_categoria', precio = '$precio' 
        WHERE cod_equipo = '$cod_equipo'";


$conn->query($sql);
$conn->close();

header("Location: consulta_inventario.php");