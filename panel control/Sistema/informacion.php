<!DOCTYPE HTML>
<html>
    <head>
        <title>Projecte Jofre</title>
        <link rel="stylesheet" href="../../css/sistema.css">
    </head>
        <ul style="font-size: 20px; display: flex;">
            <li><a href="../indice.html">Inicio</a></li>
            <li><a href="sistema.php">Volver</a></li>
        </ul>
        <br><h2>Informacion del sistema</h2><br><br>
    </body>
</html>
<?php
echo "<pre>";
echo shell_exec('lshw -short');
?>
