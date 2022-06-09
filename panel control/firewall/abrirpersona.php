<?php
$abrirpuertopersona = $_POST['abrirpuertopersona'];
$abririppersona = $_POST['abririppersona'];
$string = './abrirpersona.sh' . " " . $abrirpuertopersona . " " . $abririppersona;
$output = shell_exec($string);
header ('Location: persona.php');
?>