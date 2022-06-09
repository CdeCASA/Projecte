<!DOCTYPE HTML>
<html>
    <head>
        <title>Projecte Jofre</title>
        <link rel="stylesheet" href="../../css/sistema.css">
    </head>
        <ul style="font-size: 20px; display: flex;">
            <li><a href="../indice.html">Inicio</a></li>
            <li><a href="aplicaciones.php">Volver</a></li>
        </ul>
        <br><h2>Buscar aplicaciones</h2><br>
        <a>Introduce una aplicacion para buscar todas las opciones posibles</a><br>
<ul style="font-size: 20px; display: flex;">
        <li>
            <a>Introduce la aplicacion</a><form action="buscar2.php" method="post">
            <input type="text" name="buscar" id="buscar">
            <input type="submit" value="Enviar">
        </form></li>
</ul>
<br>
<h3>Aplicaciones encontradas</h3>
    </body>
</html>
<?php
echo "<pre>";
echo shell_exec('cat buscar.txt');
?>