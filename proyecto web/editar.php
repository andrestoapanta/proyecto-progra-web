<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0-alpha1/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Editar</title>
</head>
<header>
    <h1>Equipos deportivos
        “Eduardo Toapanta”</h1>
</header>

<body>
    <?php

    include("config/conexion.php");

    $consulta = "SELECT * FROM equipo";

    if ($resultado = $conn->query($consulta)) {

        if ($resultado->num_rows > 0) { ?>

            <div class="container">
                <h1 class="my-4 text-center">Edite un equipo deportivo</h1>
                <?php while ($filas = $resultado->fetch_assoc()) { ?>
                    <form action="ejecutar_edicion.php" method="post" class="w-50 mx-auto" enctype="multipart/form-data">
                        <input type="hidden" name="cod_equipo" id="cod_equipo" value="<?php echo $filas['cod_equipo']; ?>">
                        <br>
                        <div class="mb-3">
                            <label for="nom_equipo">Nombre del Equipo:</label>
                            <input type="text" class="form-control" name="nom_equipo" id="nom_equipo" value="<?php echo $filas['nom_equipo']; ?>" required><br>
                        </div>

                        <div class="mb-3">
                            <label for="existencias">Existencias:</label>
                            <input type="number" class="form-control" name="existencias" id="existencias" value="<?php echo $filas['existencias']; ?>" required><br>
                        </div>

                        <div class="mb-3">
                            <label for="cod_categoria" class="form-label">Categoria:</label>
                            <select class="form-control" name="cod_categoria" id="cod_categoria">
                                <option value="<?php echo $filas['cod_categoria']; ?>"></option>
                                <option value="Camisa">Camisa</option>
                                <option value="Pantaloneta">Pantaloneta</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="precio">Precio:</label>
                            <input type="number" class="form-control" name="precio" id="precio" step="0.01" value="<?php echo $filas['precio']; ?>" required><br>
                        </div>

                        <button type="submit" class="btn btn-success" onclick="location.href='eliminar.php?cod_equipo=<?php echo $cod_equipo; ?>'">Actualizar</button>

                        <br>
                    </form>
                <?php } ?>
            </div>

        <?php } else { ?>
            <p class="text-center">No hay equipos deportivos registrados.</p>
        <?php } ?>

    <?php } else { ?>
        <p class="text-center">Error al conectar con la base de datos.</p>
    <?php } ?>
</body>

</html>