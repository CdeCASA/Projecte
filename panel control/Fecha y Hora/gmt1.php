<?php
shell_exec('sudo timedatectl set-timezone Etc/GMT-1');

header ('Location: fechayhora.php');

?>