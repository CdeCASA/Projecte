<?php
$cambiaip = $_POST['cambiaip'];
$gateway = $_POST['gateway'];
$dns = $_POST['dns'];
$string = './cambiaip.sh' . " " . $cambiaip . " " . $gateway . " " . $dns;
$output = shell_exec($string);
header ('Location: ip.php');
?>