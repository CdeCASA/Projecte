<html>
    <head>
        <title>Projecte Jofre</title>
        <link rel="stylesheet" href="../../css/sistema.css">
    </head>
        <ul style="font-size: 20px; display: flex;">
            <li><a href="../indice.html">Inicio</a></li>
            <li><a href="firewall.php">Volver</a></li>
        </ul>
        <a>Introduce el puerto o el nombre de la herramienta (ssh, mysql, etc) para abrir o cerrar los puertos</a>
<ul style="font-size: 20px; display: flex;">
        <li><a>Abrir puerto</a><form action="habilitar.php" method="post">
            <input type="text" name="habilitar" id="habilitar">
            <input type="submit" value="Enviar">
        </form></li>
        <li><a>Cerrar puerto</a><form action="deshabilitar.php" method="post">
            <input type="text" name="deshabilitar" id="deshabilitar">
            <input type="submit" value="Enviar">
        </form></li>
        </ul>
        <?php
        echo "<pre>";
        echo shell_exec('sudo ufw status numbered');
        echo "<pre>";
        ?>
    </body>
</html>