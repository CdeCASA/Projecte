<?php
shell_exec('sudo timedatectl set-timezone Etc/GMT+2');

header ('Location: fechayhora.php');

?>