<?php
$cerrarpuertored = $_POST['cerrarpuertored'];
$cerraripred = $_POST['cerraripred'];
$string = './abrirpersona.sh' . " " . $cerrarpuertored . " " . $cerraripred;
$output = shell_exec($string);
header ('Location: red.php');
?>