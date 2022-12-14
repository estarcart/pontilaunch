<?php
$conex = mysqli_connect("localhost", "root", "", "pontilaunch");
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pontilaunch</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;700&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/estilos.css">
    <style type="text/css">
        a {
            color: black;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="head"></div>
    <div class="pontilaunchHome">
        <h1>pontilaunch</h1>
    </div>
    <div class="pontilaunch1Home">
        <h1>pontilaunch</h1>
    </div>

    <!-- Icono casa -->
    <div class="casa">
        <a href="../vistas/home.php">
            <img src="../imagenes/casa.png" href="../vistas/home.php">
        </a>
    </div>

    <!-- Icono salir -->
    <div class="salir">
        <a href="../vistas/inicio.php">
            <img src="../imagenes/cerrar-sesion.png">
        </a>
    </div>

    <div class="publicar">
        <form method="post">
            <input type="text" required placeholder="encabezado" class="publi1" name="encabezado" autocomplete="off">

            <input type="text" required placeholder="correo de contacto" name="correo" class="publi2" autocomplete="off">

            <input type="text" required placeholder="escriba un mensaje" name="mensaje" class="publi3" autocomplete="off">

            <input type="submit" value="enviar mensaje" name="guardar1" class="publi4">
        </form>

    </div>

    <?php
    include('../conexiones/gcontacto.php');
    ?>
</body>

</html>