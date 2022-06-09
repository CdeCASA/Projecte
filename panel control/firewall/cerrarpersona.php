<?php
$cerrarpuertopersona = $_POST['cerrarpuertopersona'];
$cerrarippersona = $_POST['cerrarippersona'];
$string = './cerrarpersona.sh' . " " . $cerrarpuertopersona . " " . $cerrarippersona;
$output = shell_exec($string);
header ('Location: persona.php');
?>