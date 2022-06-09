<!DOCTYPE HTML>
<html>
    <head>
        <title>Projecte Jofre</title>
        <link rel="stylesheet" href="../../css/sistema.css">
    </head>
        <ul style="font-size: 20px; display: flex;">
            <li><a href="../indice.html">Inicio</a></li>
            <li><a href="procesos.php">Volver</a></li>
            <li><a href="ps.php">Ver procesos activos</a></li>
        </ul>
        <br><h2>Eliminar procesos</h2><br>
        <a>Aqui puedes eliminar procesos activos en tu sistema, para ello introduce el PID o el nombre del proceso a eliminar</a><br>
<ul style="font-size: 20px; display: flex;">
    <li><a>Matar proceso por PID: </a><form action="pid.php" method="post">
        <input type="text" name="pid" id="pid">
        <input type="submit" value="Enviar">
    </form></li>
    <li><a>Matar proceso por nombre: </a><form action="nom.php" method="post">
        <input type="text" name="nom" id="nom">
        <input type="submit" value="Enviar">
    </form></li>
    <br></body>
    </html>