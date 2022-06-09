<!DOCTYPE HTML>
<html>
    <head>
        <title>Projecte Jofre</title>
        <link rel="stylesheet" href="../../css/sistema.css">
    </head>
        <ul style="font-size: 20px; display: flex;">
            <li><a href="../indice.html">Inicio</a></li>
        </ul>
	<h1>Nombre de la maquina</h1>
    <a>Aqui dispones de tres opciones, el boton de actualizar la maquina, actualiza todos los paquetes de la maquina, con el boton de buscar aplicaciones, podras buscar todas las herramientas disponibles, por ultimo introduce la aplicacion que quieres instalar en el cuadro de instalacion</a>
    <ul style="font-size: 20px; display: flex;">
    <li><a href=actualizar.php>Actualizar la maquina</a></li>
    <li><a href=buscar.php>Buscar aplicaciones</a></li>
    <li><a>Instalar aplicaciones</a><form action="instalar.php" method="post">
        <input type="text" name="instalar" id="instalar">
        <input type="submit" value="Enviar">
    </form></li>
    </ul>
    </body>
</html>
<?php
echo "<pre>";
echo shell_exec('cat aplicaciones.txt');
?>