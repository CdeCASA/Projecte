<?php
$nom = $_POST['nom'];
$string = './nom.sh' . " " . $nom;
$output = shell_exec($string);
header ('Location: ps.php');
?>