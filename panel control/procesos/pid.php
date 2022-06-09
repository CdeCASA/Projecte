<?php
$pid = $_POST['pid'];
$string = './pid.sh' . " " . $pid;
$output = shell_exec($string);
header ('Location: ps.php');
?>