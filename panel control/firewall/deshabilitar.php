<?php
$deshabilitar = $_POST['deshabilitar'];
$string = './deshabilitar.sh' . " " . $deshabilitar;
$output = shell_exec($string);
header ('Location: puertos.php');
?>