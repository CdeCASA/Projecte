<!DOCTYPE HTML>
<html>
    <head>
        <title>Projecte Jofre</title>
        <link rel="stylesheet" href="../../css/sistema.css">
    </head>
        <ul style="font-size: 20px; display: flex;">
            <li><a href="../indice.html">Inicio</a></li>
        </ul>
        <h1>
        <?php
        echo "<pre>";
        echo shell_exec('date');
        ?>
        </h1>
        <a>Aqui puedes cambiar la hora de tu sistema, selecciona la hora de una region y esta se aplicara de forma automatica</a>
        <tr>
            <br>
            <h2>Zonas horarias positivas</h2>
            <br>
            <ul style="font-size: 20px; display: flex;justify-content: center;">
            <td>
                <li><a href="gmt0.php">GMT 0 - Islandia</a></li>
            </td>
            <td>
                <li><a href="gmt1.php">GMT 1 - Portugal</a></li>
            </td>
            <td>
                <li><a href="gmt2.php">GMT 2 - España</a></li>
            </td>
            <td>
                <li><a href="gmt3.php">GMT 3 - Bulgaria</a></li>
            </td>
            <td>
                <li><a href="gmt4.php">GMT 4 - Georgia</a></li>
            </td>
            <td>
                <li><a href="gmt5.php">GMT 5 - Rusia</a></li>
            </td>
            </ul>
            </tr>
            <tr>
            <ul style="font-size: 20px; display: flex;justify-content: center;">
            <td>
                <li><a href="gmt6.php">GMT 6 - Kazajistan</a></li>
            </td>
            <td>
                <li><a href="gmt7.php">GMT 7 - Tailandia</a></li>
            </td>
            <td>
                <li><a href="gmt8.php">GMT 8 - Hong Kong</a></li>
            </td>
            <td>
                <li><a href="gmt9.php">GMT 9 - Japon</a></li>
            </td>
            <td>
                <li><a href="gmt10.php">GMT 10 - Guam</a></li>
            </td>
            <td>
                <li><a href="gmt11.php">GMT 11 - Micronesia</a></li>
            </td>
            </ul>
            </tr>
            <h2>Zonas horarias negativas</h2>
            <br>
            <br>
            <ul style="font-size: 20px; display: flex;justify-content: center;">
            <td>
                <li><a href="gmt0.php">GMT 0 - Costa de Marfil</a></li>
            </td>
            <td>
                <li><a href="gmt-1.php">GMT -1 - Cabo verde</a></li>
            </td>
            <td>
                <li><a href="gmt-2.php">GMT -2 - Groenlandia</a></li>
            </td>
            <td>
                <li><a href="gmt-3.php">GMT -3 - Argentina</a></li>
            </td>
            <td>
                <li><a href="gmt-4.php">GMT -4 - Venezuela</a></li>
            </td>
            <td>
                <li><a href="gmt-5.php">GMT -5 - Panama</a></li>
            </td>
            </ul>
            </tr>
            <tr>
            <ul style="font-size: 20px; display: flex;justify-content: center;">
            <td>
                <li><a href="gmt-6.php">GMT -6 - Costa Rica</a></li>
            </td>
            <td>
                <li><a href="gmt-7.php">GMT -7 - Mexico</a></li>
            </td>
            <td>
                <li><a href="gmt-8.php">GMT -8 - Islas Pitcarin</a></li>
            </td>
            <td>
                <li><a href="gmt-10.php">GMT -10 - Islas cook</a></li>
            </td>
            <td>
                <li><a href="gmt-11.php">GMT -11 - Samoa Americana</a></li>
            </td>
            </ul>
            </tr>
    </body>
</html>
