<?

function LoadLog(){
$data = file_get_contents("/var/log/freeradius/radius.log");
if($data==""){
	return "Fehler beim Laden des Logs versuch: sudo chmod -R 777 /var/log/freeradius/";
}
return $data;
}

?>