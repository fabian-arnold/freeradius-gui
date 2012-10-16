<big>Die letzte Zeile ist zuerst da!</big>
<div style="background: #300924; border-radius: 5px; color: #FFF9FF; padding: 10px;">
<?
include '../phpcore/loadlog.php';
//$log = str_replace( "\n","<br>",LoadLog());
$log = array_reverse(split("\n", LoadLog()));
foreach ($log as $line) print "&raquo;". $line."<br>";
?></div>
<script>
	var tt = setTimeout('$("#content").load("ajax/log.php")', 1000);
	function StopTimer(){
		clearTimeout(tt);
	}
</script>