<pre style="background: #300924; border-radius: 5px; color: #FFF9FF; padding: 10px;">
<?
include '../phpcore/loadlog.php';
//$log = str_replace( "\n","<br>",LoadLog());
$log = split("\n", LoadLog());
foreach ($log as $line) print "&raquo;". $line."<br>";
?>
</pre>
<script>
	$(document).ready(function() {
	    
		    $('html, body').animate({scrollTop: document.height}, 'slow');
		    	
	});
</script>