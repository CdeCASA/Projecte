<?php
shell_exec('sudo timedatectl set-timezone Etc/GMT-8');

header ('Location: fechayhora.php');

?>