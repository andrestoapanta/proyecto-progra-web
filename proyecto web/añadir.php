<?php
include("config/conexion.php");

// Se obtienen los datos del formulario
$cod_equipo = $_POST['cod_equipo'];
$nom_equipo = $_POST['nom_equipo'];
$existencias = $_POST['existencias'];
$precio = $_POST['precio'];
$cod_categoria = $_POST['cod_categoria'];

// Se guarda la imagen en el servidor
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

// Se inserta la información en la base de datos
$sql = "INSERT INTO equipo (cod_equipo, nom_equipo, existencias, precio, cod_categoria, imagen)
VALUES ('$cod_equipo', '$nom_equipo', '$existencias', '$precio', '$cod_categoria', '$imagen')";

$conn->query($sql);
$conn->close();

header("Location: consulta_inventario.php");