<?php
include ('core.php');


function LoadLog(){
	return FRW_Core::runSSHcommandSudo("cat /var/log/freeradius/radius.log");
}
?>
