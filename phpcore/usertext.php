<?php
    //ps -fC freeradius
    include ('core.php');
	switch ($_GET["action"]) {
		case 'save':
			file_put_contents("users", $_POST["test"]);
			FRW_Core::runSSHcommandSudo("chmod 777 /etc/freeradius/users");
			FRW_Core::PushFile("users", "/etc/freeradius/users");
			FRW_Core::runSSHcommandSudo("chmod 744 /etc/freeradius/users");
			header("Location: ../index.php?message=Änderungen%20übernommen");
		break;
		default:
			returnForm();
			break;
	}

function returnForm(){
	echo "<form action='phpcore/usertext.php?action=save' method='post'>";
	echo "<textarea style='width: 100%; height: 600px;' name='test'>";
	file_put_contents("users", "ERROR!");
	FRW_Core::runSSHcommandSudo("chmod 777 /etc/freeradius/users");
	FRW_Core::PullFile("/etc/freeradius/users", "users");
	FRW_Core::runSSHcommandSudo("chmod 744 /etc/freeradius/users");
	$return = file_get_contents("users");//FRW_Core::runSSHcommandSudo("cat /etc/freeradius/users");
	echo $return;
	
	echo "</textarea>";
	echo "<input type='submit'>";
	echo "</form>";
}
?>