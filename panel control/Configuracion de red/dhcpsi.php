<?php
shell_exec('./dhcpsi.sh');

header ('Location: ip.php');

?>
