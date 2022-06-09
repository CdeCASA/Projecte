<?php
shell_exec('sudo timedatectl set-timezone Etc/GMT-4');

header ('Location: fechayhora.php');

?>