<?php
shell_exec('sudo timedatectl set-timezone Etc/GMT+6');

header ('Location: fechayhora.php');

?>