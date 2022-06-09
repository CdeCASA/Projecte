<?php
shell_exec('sudo timedatectl set-timezone Etc/GMT-5');

header ('Location: fechayhora.php');

?>