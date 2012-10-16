<?php
include ('core.php');

startRADIUS();

function startRADIUS(){
	header('Content-Type: text/plain');
	echo runSSHcommand("echo ".$config["ssh_password"]." | sudo -S service freeradius start");
}
?>
