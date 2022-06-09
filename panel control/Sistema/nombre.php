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
        <br><h2>Sistema</h2><br>
        <a>Aqui se muestra el nombre actual de la maquina, si desea cambiarlo introducelo en el cuadro de abajo</a><br>
        <br><h2>Nombre de la maquina</h2><br>
    </body>
</html>
<?php
echo shell_exec('hostname');
?>
<html>
    <body>
<ul style="font-size: 20px; display: flex;">
    <li><a>Cambiar nombre de la maquina</a><form action="cambiar.php" method="post">
        <input type="text" name="cambiar" id="cambiar">
        <input type="submit" value="Enviar">
    </form></li>
    <br></body>
    </html>
