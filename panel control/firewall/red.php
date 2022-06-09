<html>
    <head>
        <title>Projecte Jofre</title>
        <link rel="stylesheet" href="../../css/sistema.css">
    </head>
        <ul style="font-size: 20px; display: flex;">
            <li><a href="../indice.html">Inicio</a></li>
            <li><a href="firewall.php">Volver</a></li>
        </ul>
        <a>En el primer lugar pondremos el puerto a abrir/cerrar, en el segundo pondremos la red tal que así -> 22 - x.x.x.0/24</a>
<ul style="font-size: 20px; display: flex;">
        <li><a>Bloquear un puerto a una red especifica</a><form action="cerrarred.php" method="post">
            <input type="text" name="cerrarpuertored" id="cerrarpuertored">
            <a>Ip :</a><form action="cerrarred.php" method="post">
            <input type="text" name="cerraripred" id="cerraripred">
            <input type="submit" value="Enviar">
        </form></li>
        <li><a>Abrir un puerto a una red especifica</a><form action="abrirred.php" method="post">
            <input type="text" name="abrirpuertored" id="abrirpuertored">
            <a>Ip :</a><form action="abrirred.php" method="post">
            <input type="text" name="abriripred" id="abriripred">
            <input type="submit" value="Enviar">
        </form></li></ul>
        <br>
        <?php
        echo "<pre>";
        echo shell_exec('sudo ufw status numbered');
        echo "<pre>";
        ?>
    </body>
</html>