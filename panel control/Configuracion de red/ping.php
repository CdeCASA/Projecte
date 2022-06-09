<!DOCTYPE HTML>
<html>
    <head>
        <title>Projecte Jofre</title>
        <link rel="stylesheet" href="../../css/sistema.css">
    </head>
        <ul style="font-size: 20px; display: flex;">
            <li><a href="../indice.html">Inicio</a></li>
            <li><a href="ip.php">Volver</a></li>
        </ul>
        <br><h2>Ping</h2><br>
        <a>Introduce una ip a la que hacer un ping y comprobar si existe conexion entre maquinas</a><br>
<ul style="font-size: 20px; display: flex;">
            <a>Hacer ping a la ip : </a><form action="hacerping.php" method="post">
            <input type="text" name="ping" id="ping">
            <input type="submit" value="Enviar">
        </form></li>
</ul>
<br>
    </body>
</html>
<?php
echo "<pre>";
echo shell_exec('cat ping.txt');
?>