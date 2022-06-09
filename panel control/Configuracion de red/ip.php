<!DOCTYPE HTML>
<html>
<head>
        <title>Projecte Jofre</title>
        <link rel="stylesheet" href="../../css/sistema.css">
    </head>
        <ul style="font-size: 20px; display: flex;">
            <li><a href="../../index.html">Inicio</a></li>
            <li><a href="../indice.html">Volver</a></li>
        </ul>
        <br><h1>Configuracion de red</h1><br><br>
        <ul style="font-size: 20px; display: flex;justify-content: center;">
                <td>
                    <li><a href="ipfija.php">Establecer ip fija</a></li>
                </td>
                <td>
                <li><a href=dhcpsi.php>Activar dhcp</a></li>
                </td>
                <td>
                    <li><a href="ping.php">Hacer ping</a></li>
                </td>
            </ul>
            <h3>Tu IP</h3>
    </body>
<?php
echo "<pre>";
echo shell_exec('ip a');
?>