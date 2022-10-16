<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicia sesión - pontilaunch</title>
    <link rel="stylesheet" href="/styles/estilos.css"> <!--se conecta el html con el css-->
    <style type="text/css">
        a{
            color: black;
            text-decoration: none;
        }
    </style> <!--codigo para quitar delineado y color azul a las palabras que llevan link-->
</head>
<body>
    <div class="reguser"></div>
    <div class="volver1">
        <a href="/vistas/inicio.html">regresar</a>
    </div>
    <div class="registro">
        <p>registrate en pontilaunch como:</p>
    </div>
    <div class="fech">
        <p>fecha de nacimiento:</p>
    </div>
    <div class="estudre">
        <a href="/vistas/registerestudiante.html">estudiante</a>
    </div>
    <div class="usuareg">
        <a href="/vistas/register.html">usuario</a>
    </div>

    <div class="terminos1">
        <a>Sí, he leído y presto mi consentimiento a los Términos de Uso del sitio, y al procesamiento, al tratamiento y a la transferencia de mis datos personales conforme a lo dispuesta en la Política de Privacidad. </a>
    </div>

    <div class="registra">
        <form method="post">
            
            <input type="email" required placeholder="correo electronico" class="lg2" autocomplete = " off " > <!--cuadro para escribir el correo electronic-->
            
            <input type="radio" required class="terminos">
            
            <input type="text" required placeholder="nombres" class="lg3" autocomplete = " off " > <!--cuadro para escribir el nombre-->
               
            <input type="text" required placeholder="apellidos" class="lg4" autocomplete = " off " > <!--cuadro para escribir apellidos-->
               
            <input type="date" required placeholder="fecha de nacimiento" class="lg5" autocomplete = " off " > <!--cuadro para escribir la fecha de nacimiento-->
     
            <input type="password" required placeholder="contraseña" class="lg6" autocomplete = " off " > <!--cuadro para escribir la fecha de nacimiento-->
    
            <input type="submit" class="registrarse" value="registrarse" > <!--al darle click lo registra en el sistema-->
        
        </form>
    </div>
    
    <?php
    include("conexi.php"):
    ?>

    
</body>
</html>