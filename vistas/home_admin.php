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
    <div class="selecc"></div>
    <!-- Rectangulo amarillo usuario -->
    <div class="rectanguloUser"></div>
    <!-- Rectangulo rojo gestionar iniciativas -->
    <a href="../../phpmyadmin/index.php?route=/database/structure&db=pontilaunch">
        <div class="rectanguloGest"></div>
    </a>
    <!-- Rectangulo gris administrar usuarios -->
    <a href="../vistas/cord_adminusuarios.php">
        <div class="rectanguloadmuser"></div>
    </a>
    <!--Texto administrar usuarios-->
    <div class="adminuser">
        <a href="../vistas/cord_adminusuarios.php">
            <h1>administrar usuarios</h1>
        </a>
    </div>
    <!-- Icono administrar usuario-->
    <div class="admuserIcon">
        <a href="../vistas/cord_adminusuarios.php">
            <img src="../imagenes/admusuarios.png" href="../vistas/cord_adminusuarios.php">
        </a>
    </div>

    <!-- Icono usuario -->
    <div class="usuarioIcon">
        <img src="../imagenes/usuario.png">
    </div>
    <!-- Texto usuario  -->
    <div class="usuarioText1">
        <h1>Admin</h1>
    </div>
    <!-- Texto Gestionar -->
    <div class="proyectGest">
        <a href="../../phpmyadmin/index.php?route=/database/structure&db=pontilaunch">
            <h1>ingresar a la base de datos</h1>
        </a>
    </div>
    <div class="head"></div>
    <div class="pontilaunchHome">
        <h1>pontilaunch</h1>
    </div>
    <div class="pontilaunch1Home">
        <h1>pontilaunch</h1>
    </div>


    <!-- Icono casa -->
    <div class="casa">
        <a href="../vistas/home_admin.php">
            <img src="../imagenes/casa.png" href="../vistas/home.php">
        </a>
    </div>
    <!-- Icono salir -->
    <div class="salir">
        <a href="../vistas/inicio.php">
            <img src="../imagenes/cerrar-sesion.png">
        </a>
    </div>
    <!-- Icono gestionar iniciativa -->
    <div class="admfoto">
        <a href="../../phpmyadmin/index.php">
            <img src="../imagenes/gest.png">
        </a>
    </div>
    <!-- Icono comentario -->
    <div class="comentario">
        <a href="../vistas/quejas.php">
            <img src="../imagenes/comentario.png">
        </a>
    </div>

</body>


</html>