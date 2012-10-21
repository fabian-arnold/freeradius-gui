<?php
include ('core.php');

if( basename( __FILE__ ) == basename( $_SERVER['PHP_SELF'] ) ) 
{
	echo '<pre style="background: #300924; border-radius: 5px; color: #FFF9FF; padding: 10px;">';
	echo ServerControl::stopRADIUS();
	echo "</pre>";
}  


?>
