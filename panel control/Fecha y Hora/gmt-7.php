<?php
shell_exec('sudo timedatectl set-timezone Etc/GMT+7');

header ('Location: fechayhora.php');

?>