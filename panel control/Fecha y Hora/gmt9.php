<?php
shell_exec('sudo timedatectl set-timezone Etc/GMT-9');

header ('Location: fechayhora.php');

?>