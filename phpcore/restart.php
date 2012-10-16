<?
echo shell_exec("echo ".$_GET['pwd']." | sudo -S /etc/init.d/freeradius restart");
?>