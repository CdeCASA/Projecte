<?php
shell_exec('sudo timedatectl set-timezone Etc/GMT+10');

header ('Location: fechayhora.php');

?>