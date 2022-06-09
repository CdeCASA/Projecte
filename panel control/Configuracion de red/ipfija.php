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
        <br><h2>Establecer ip fija</h2><br><br>
        <a>Aqui puedes establecer tu ip de forma fija, en el primer cuadro, introduce la ip que deseas establecer, en el segundo cuadro, introduce el gateway de tu router, y en el ultimo cuadro establece el servidor dns que deseas.</a>
<ul style="font-size: 20px; display: flex;">
        <li><a>Cambiar ip</a><form action="cambiaip.php" method="post">
            <input type="text" name="cambiaip" id="cambiaip">
            <a>Gateway :</a><form action="cambiaip.php" method="post">
            <input type="text" name="gateway" id="gateway">
            <a>Servidor DNS :</a><form action="cambiaip.php" method="post">
            <input type="text" name="dns" id="dns">
            <input type="submit" value="Enviar">
        </form></li>
</ul>
<br>
<h3>Tu IP</h3>
    </body>
</html>
<?php
echo "<pre>";
echo shell_exec('ip a');
?>