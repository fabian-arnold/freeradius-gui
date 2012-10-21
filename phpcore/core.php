<?
include ('../config.php');
include ('servercontrol.php');
/**
 *
 */
class FRW_Core {
	static $isLogedin = FALSE;
	static $connection;
	static public function ConnectSSH() {
		if (!function_exists("ssh2_connect"))
			die("fail: function ssh2_connect doesn't exist\n");

		if (!($con = ssh2_connect(Config::$config["ssh_host"], 22))) {
			echo "fail: unable to establish connection\n";
			exit();
		} else {

			if (!ssh2_auth_password($con, Config::$config["ssh_user"], Config::$config["ssh_password"])) {
				echo "fail: wrong password or user\n";
				exit();
			} else {
				FRW_Core::$connection = $con;
				FRW_Core::$isLogedin = TRUE;
			}
		}
	}

	static public function runSSHcommand($command) {
		if (FRW_Core::$isLogedin != TRUE) {
			FRW_Core::ConnectSSH();
		}
		if (!($stream = ssh2_exec(FRW_Core::$connection, $command))) {
			echo "fail: unable to execute command\n";
			exit();
		} else {
			//Die ausgabe
			stream_set_blocking($stream, true);
			$data = "";
			while ($buf = fread($stream, 4096)) {
				$data .= $buf;
			}
			fclose($stream);
			return $data;
		}

	}

	static public function runSSHcommandSudo($command) {
		return FRW_Core::runSSHcommand("echo " . Config::$config["ssh_password"] . " | sudo -S " . $command);
	}

	static public function PullFile($remote, $local) {
		if (FRW_Core::$isLogedin != TRUE) {
			FRW_Core::ConnectSSH();
		}
		ssh2_scp_recv(FRW_Core::$connection, $remote, $local) or die("fail: couldn't transfare file");
	}
	
	static public function PushFile($local, $remote) {
		if (FRW_Core::$isLogedin != TRUE) {
			FRW_Core::ConnectSSH();
		}
		ssh2_scp_send(FRW_Core::$connection, $local, $remote) or die("fail: couldn't transfare file");
	}
	

}
?>
