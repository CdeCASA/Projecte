<?php
shell_exec('sudo timedatectl set-timezone Etc/GMT+0');

header ('Location: fechayhora.php');

?>