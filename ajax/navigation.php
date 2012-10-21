<li><a data-href="../phpcore/usertext.php" href="#">User</a></li>
<!--<li><a data-href="groups.php" href="#">Gruppen</a></li>
<li><a data-href="router.php" href="#">Router</a></li>-->
<li><a data-href="log.php" href="#">Log</a></li>
<li><a data-href="apply.php" href="#">Änderungen übernehmen</a></li>
<script>
	$("#navigation_top li a").click(function(){
		$("#navigation_top li").removeClass("active");
		$(this).parent().addClass("active");
		$("#content").load("ajax/"+$(this).data("href"));
	});
</script>