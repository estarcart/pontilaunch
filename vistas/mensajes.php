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
        <a href="../vistas/home_estudiante.php">
            <img src="../imagenes/casa.png" href="../vistas/home_estudiante.php">
        </a>
    </div>
    <!-- Icono comentario -->
    <div class="comentario">
        <a href="../vistas/mensajes.php">
            <img src="../imagenes/comentario.png">
        </a>
    </div>
    <!-- Icono salir -->
    <div class="salir">
        <a href="../vistas/inicio.php">
            <img src="../imagenes/cerrar-sesion.png">
        </a>
    </div>
    <div class="mensjent">
        <h1>mensajes entrantes</h1>
    </div>
    <?php
    $sql = "SELECT * FROM contacto";
    $result = mysqli_query($conex, $sql);
    while ($mostrar = mysqli_fetch_array($result)) {
    ?>

        <form class="mensojo" method="post">
            <label class="enc"><?php echo $mostrar['encabezado_contacto'] ?></label>
            <label class="cork"><?php echo $mostrar['correo_contacto'] ?></label>
            <label class="menk"><?php echo $mostrar['mensaje_contacto'] ?></label>
        </form>
    <?php
    }
    ?>
    </div>
</body>

</html>