<?
/**
 *
 */
class ServerControl {

	function startRADIUS() {
		return FRW_Core::runSSHcommandSudo("service freeradius start");
	}

	function stopRADIUS() {
		return FRW_Core::runSSHcommandSudo("service freeradius stop");
	}

	function restartRADIUS() {
		return FRW_Core::runSSHcommandSudo("service freeradius restart");
	}

}
?>