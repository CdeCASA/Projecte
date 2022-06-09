<?php
$habilitar = $_POST['habilitar'];
$string = './habilitar.sh' . " " . $habilitar;
$output = shell_exec($string);
header ('Location: puertos.php');
?>