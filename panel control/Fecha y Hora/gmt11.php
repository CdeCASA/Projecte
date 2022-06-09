<?php
shell_exec('sudo timedatectl set-timezone Etc/GMT-11');

header ('Location: fechayhora.php');

?>