<!DOCTYPE HTML>
<html>
    <head>
        <title>Projecte Jofre</title>
        <link rel="stylesheet" href="../css/sistema.css">
    </head>
        <ul style="font-size: 20px; display: flex;">
            <li><a href="indice.html">Inicio</a></li>
        </ul>
    <br>
    <h3>Terminal web</h3>
    <a>Este es el terminal web, introduce tus comandos, la respuesta saldrá abajo</a>
    <br>
    </body>
</html>

<form action="terminal.php" method="post">
    Introduce el comando: <input type="text" name="command">
    <input type="submit" value="Enviar">
</form>

<?php

$command = $_POST['command'];
echo "<pre>";
echo shell_exec($command);
echo "</pre>";

?>