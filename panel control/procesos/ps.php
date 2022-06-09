<!DOCTYPE HTML>
<html>
    <head>
        <title>Projecte Jofre</title>
        <link rel="stylesheet" href="../../css/sistema.css">
    </head>
        <ul style="font-size: 20px; display: flex;">
            <li><a href="../indice.html">Inicio</a></li>
            <li><a href="procesos.php">Volver</a></li>
            <li><a href="eliminar.php">Eliminar procesos</a></li>
        </ul>
	<h3>Procesos de la maquina</h3>
    </body>
</html>
<?php
echo "<pre>";
echo shell_exec('ps -aux | less');
echo "<pre>";
?>
