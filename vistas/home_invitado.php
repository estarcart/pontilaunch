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
    <!-- Rectangulo gris quejas -->
    <a href="../vistas/quejarseinv.php">
        <div class="rectanguloQuejas"></div>
    </a>
    <!-- Icono usuario -->
    <div class="usuarioIcon">
        <img src="../imagenes/usuario.png">
    </div>
    <!-- Texto usuario  -->
    <div class="usuarioText">
        <h1>Invitado</h1>
    </div>
    <!-- Icono proyecto -->

    <div class="head"></div>
    <div class="pontilaunchHome">
        <h1>pontilaunch</h1>
    </div>
    <div class="pontilaunch1Home">
        <h1>pontilaunch</h1>
    </div>

    <!-- Icono casa -->
    <div class="casa">
        <a href="../vistas/home_invitado.php">
            <img src="../imagenes/casa.png" href="../vistas/home_invitado.php">
        </a>
    </div>
    <!-- Icono salir -->
    <div class="salir">
        <a href="../vistas/inicio.php">
            <img src="../imagenes/cerrar-sesion.png">
        </a>
    </div>
    <!-- Texto Quejas -->
    <div class="quejasText">
        <a href="../vistas/quejarseinv.php">
            <h1>quejas</h1>
        </a>
    </div>
    <?php
    $sql = "SELECT * FROM publicaciones";
    $result = mysqli_query($conex, $sql);
    while ($mostrar = mysqli_fetch_array($result)) {
    ?>
        <form class="pub" method="post">
            <label class="tit"><?php echo $mostrar['titulo_publicacion'] ?></label>
            <label class="sed"><?php echo $mostrar['sede_publicacion'] ?></label>
            <iframe width="300" height="200" class="yt" src="<?php echo $mostrar['yt_publicacion'] ?>"></iframe>
            <label class="des"><?php echo $mostrar['descripcion_publicacion'] ?></label>
            <label class="fec"><?php echo $mostrar['fecha_publicacion'] ?></label>
        </form>

    <?php
    }
    ?>
    <?php
    include('../conexiones/comentarios.php');
    ?>
</body>

</html>