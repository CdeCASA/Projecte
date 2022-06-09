<?php
shell_exec('./actualizar.sh');

header ('Location: aplicaciones.php');

#$old_path = getcwd();
#chdir('/var/www/html/Projecte/panel control/aplicaciones');
#$output = shell_exec('sudo sh actualizar.sh');
#chdir($old_path);
?>
