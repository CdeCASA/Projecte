<?php
$instalar = $_POST['instalar'];
$string = './instalar.sh' . " " . $instalar;
$output = shell_exec($string);
header ('Location: aplicaciones.php');
?>