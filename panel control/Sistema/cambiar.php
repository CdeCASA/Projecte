<?php
$cambiar = $_POST['cambiar'];
$string = './cambiar.sh' . " " . $cambiar;
$output = shell_exec($string);
header ('Location: nombre.php');
?>