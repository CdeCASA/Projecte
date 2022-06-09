<?php
$buscar = $_POST['buscar'];
$string = './buscar.sh' . " " . $buscar;
$output = shell_exec($string);
header ('Location: buscar.php');
?>