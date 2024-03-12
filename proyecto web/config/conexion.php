<?php

//datos del servidor, database
$servidor = "localhost";

$base_datos = "ropa_inventario";

$usuario = "root";

$clave = "";

//conexión

$conn = new mysqli($servidor, $usuario, $clave, $base_datos);

if (!$conn) {

    die("Connectciòn Fallida: " . mysqli_connect_error());
}
