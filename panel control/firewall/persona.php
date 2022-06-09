<html>
    <head>
        <title>Projecte Jofre</title>
        <link rel="stylesheet" href="../../css/sistema.css">
    </head>
        <ul style="font-size: 20px; display: flex;">
            <li><a href="../indice.html">Inicio</a></li>
            <li><a href="firewall.php">Volver</a></li>
        </ul>
        <a>En el primer lugar pondremos el puerto a abrir/cerrar, en el segundo pondremos la ip tal que así -> 22 - x.x.x.x</a>
<ul style="font-size: 20px; display: flex;">
        <li><a>Bloquear un puerto a una persona especifica</a><form action="cerrarpersona.php" method="post">
            <input type="text" name="cerrarpuertopersona" id="cerrarpuertopersona">
            <a>Ip :</a><form action="cerrarpersona.php" method="post">
            <input type="text" name="cerrarippersona" id="cerrarippersona">
            <input type="submit" value="Enviar">
        </form></li>
        <li><a>Abrir un puerto a una persona especifica</a><form action="abrirpersona.php" method="post">
            <input type="text" name="abrirpuertopersona" id="abrirpuertopersona">
            <a>Ip :</a><form action="abrirpersona.php" method="post">
            <input type="text" name="abririppersona" id="abririppersona">
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
