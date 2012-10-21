<?php
include ('core.php');


function LoadLog(){
	include ('../config.php');
	header('Content-Type: text/plain');
	echo runSSHcommand("echo ".$config["ssh_password"]." | sudo -S cat /var/log/freeradius/radius.log");
}
?>
