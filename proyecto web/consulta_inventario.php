<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gestion de inventario</title>
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0-alpha1/css/bootstrap.min.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    /*Oculta el cuadro de busqueda*/
    #buscar {
      display: none;
    }
  </style>
</head>
<header>
  <h1>Equipos deportivos
    “Eduardo Toapanta”</h1>
</header>

<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <br>
        <button type="button" class="btn btn-primary mb-3" onclick="showSearch()">Buscar</button>
        <input type="text" id="buscar" class="form-control mb-3" placeholder="Buscar..." onkeyup="filterTable()">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <td>Cod. Equipo</td>
              <td>Nombre</td>
              <td>Existencias</td>
              <td>Precio</td>
              <td>Categoria</td>
              <td>Imagen de muestra</td>
              <td>Acciones</td>
            </tr>
          </thead>
          <tbody id="tableBody">
            <?php

            include("config/conexion.php");
            $consulta = "SELECT * FROM equipo";

            if ($resultado = $conn->query($consulta)) {

              while ($filas = $resultado->fetch_assoc()) {

                $cod_equipo = $filas["cod_equipo"];
                $nombre_equipo = $filas["nom_equipo"];
                $existencias = $filas["existencias"];
                $precio = $filas["precio"];
                $cod_categoria = $filas["cod_categoria"];
                $imagen = $filas["imagen"];

                echo '<tr>
                    <td>' . $cod_equipo . '</td>
                    <td>' . $nombre_equipo . '</td>
                    <td>' . $existencias . '</td>
                    <td>' . $precio . '</td>
                    <td>' . $cod_categoria . '</td>
                    <td>
                    <img src="data:img/jpg;base64"/>
                    </td>
                    <td>'
            ?>
                <button type="button" class="btn btn-secondary btn-sm edit" onclick="location.href='editar.php?cod_equipo=<?php echo $cod_equipo; ?>'">Editar</button>
                <button type="button" class="btn btn-danger btn-sm delete" onclick="location.href='eliminar.php?cod_equipo=<?php echo $cod_equipo; ?>'">Borrar</button>
            <?php
                '</td>
                  </tr>';
              }
            }
            ?>
          </tbody>
        </table>
        <button class="btn btn-success" type="button" onclick="location.href='registro.html'">Añadir</button>
      </div>
    </div>
  </div>

  <script src="js/busqueda.js"></script>
  
</body>
</html>