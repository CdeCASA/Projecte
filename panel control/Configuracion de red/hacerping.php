<?php
$ping = $_POST['ping'];
$string = './ping.sh' . " " . $ping;
$output = shell_exec($string);
header ('Location: ping.php');
?>