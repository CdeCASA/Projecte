<?php
$abrirpuertored = $_POST['abrirpuertored'];
$abriripred = $_POST['abriripred'];
$string = './abrirpersona.sh' . " " . $abrirpuertored . " " . $abriripred;
$output = shell_exec($string);
header ('Location: red.php');
?>