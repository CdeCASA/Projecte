<?php
shell_exec('sudo timedatectl set-timezone Etc/GMT-3');

header ('Location: fechayhora.php');

?>