<?php
    //ps -fC freeradius
    include ('core.php');
	switch ($_GET["type"]) {
		case 'isrunning':
				if(isRunning()==TRUE){
					echo "<span style='color: lightgreen;'>FreeRADIUS gestartet</span>";	
				}else{
					echo "<span style='color: red;'>FreeRADIUS gestoppt</span>";	
				}
			break;
		
		default:
			
			break;
	}

function isRunning(){
	include ('../config.php');
	header('Content-Type: text/plain');
	//echo "echo ".$config["ssh_password"]." | sudo -S service freeradius start";
	//echo '<pre style="background: #300924; border-radius: 5px; color: #FFF9FF; padding: 10px;">';
	$return = runSSHcommand("ps -fC freeradius");
	if(sizeof(preg_split("/(\n|\r|\r\n)/", ($return)))>2){
		return TRUE;
	}else{
		return FALSE;
	}
	//echo "</pre>";
}
?>