<html>
    <head>
        <title>Projecte Jofre</title>
        <link rel="stylesheet" href="../../css/sistema.css">
    </head>
        <ul style="font-size: 20px; display: flex;">
            <li><a href="../indice.html">Inicio</a></li>
        </ul>
        <ul style="font-size: 20px; display: flex;justify-content: center;">
                <td>
                    <li><a href="puertos.php">Abrir/Cerrar puertos</a></li>
                </td>
                <td>
                    <li><a href="reglas.php">Reglas generales</a></li>
                </td>
            </ul>
        <?php
        echo "<pre>";
        echo shell_exec('sudo ufw status numbered');
        echo "<pre>";
        ?>
    </body>
</html>