<?


function runSSHcommand($command){
	include ('../config.php');
	if (!function_exists("ssh2_connect")) die("function ssh2_connect doesn't exist");
		
		if(!($con = ssh2_connect($config["ssh_host"], 22))){
				echo "fail: unable to establish connection\n";
		} else {
			
			if(!ssh2_auth_password($con, $config["ssh_user"], $config["ssh_password"])) {
				echo "fail: wrong password or user";
			} else {
				
				//angemeldet
				if (!($stream = ssh2_exec($con, $command))) {
					echo "fail: unable to execute command\n";
				} else {
				//Die ausgabe
				stream_set_blocking($stream, true);
				$data = "";
				while ($buf = fread($stream,4096)) {
					$data .= $buf;
				}

				
				fclose($stream);
				return $data;
			}
		}
	}
}

?>
