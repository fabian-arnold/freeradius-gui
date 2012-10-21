<?php
include ('core.php');

startRADIUS();

function startRADIUS(){
	include ('../config.php');
	header('Content-Type: text/plain');
	//echo "echo ".$config["ssh_password"]." | sudo -S service freeradius start";
	echo '<pre style="background: #300924; border-radius: 5px; color: #FFF9FF; padding: 10px;">';
	echo runSSHcommand("echo ".$config["ssh_password"]." | sudo -S service freeradius stop");
	echo "</pre>";
}
?>
