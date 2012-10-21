<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>RADIUS - Verwaltung</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Le styles -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<style type="text/css">
			body {
				padding-top: 60px;
				padding-bottom: 40px;
			}
			.sidebar-nav {
				padding: 9px 0;
			}
		</style>
		<link href="css/bootstrap-responsive.css" rel="stylesheet">

		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Le fav and touch icons
		<link rel="shortcut icon" href="../assets/ico/favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">-->
	</head>

	<body>

		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
					<a class="brand" href="./">RADIUS - Übersicht</a>
					<div class="nav-collapse collapse">
						<p id="status" class="navbar-text pull-right">
							Status nicht verfügbar.
						</p>

						<ul id="navigation_top" class="nav">
							<!-- Per ajax geldaen vgl /ajax/navigation.php-->
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>

		<div class="container-fluid">
			<div  class="row-fluid">
				<div class="span3">
					<div class="well sidebar-nav">
						<ul class="nav nav-list">
							<li class="nav-header">
								RADIUS
							</li>
							<li>
								<a onclick="$('#content').load('./phpcore/restart.php')" href="#restart">neustarten</a>
							</li>
							<li>
								<a onclick="$('#content').load('./phpcore/start.php')" href="#start">starten</a>
							</li>
							<li>
								<a onclick="$('#content').load('./phpcore/stop.php')" href="#stop">stoppen</a>
							</li>
							<li class="nav-header">
								User
							</li>
							<li>
								<a onclick="$('#content').load('./phpcore/usertext.php')"  href="#usertext">Text-Editor</a>
							</li>
						</ul>
					</div><!--/.well -->
				</div><!--/span-->
				<div id="content" class="span9">
					<div class="hero-unit">
<h1>
					<?
					if ($_GET["message"] != NULL) {
						echo $_GET["message"];
					}
					?></h1></div>
					<!-- Loaded by ajax-->
				</div><!--/span-->
			</div><!--/row-->

			<hr>

			<footer>
				<p>
					&copy; Fabian Arnold 2012-2013
				</p>
			</footer>

		</div><!--/.fluid-container-->

		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->

		<script src="js/bootstrap.min.js"></script>
		<script src="js/script.js"></script>
		<script>
			$(document).ready(function() {
				refreshState();
				<?
				if ($_GET["message"] == NULL) {
					echo '$("#content").load("ajax/home.php");';
				}
			?>
			});
			function refreshState() {
				$("#status").load("phpcore/status.php?type=isrunning");
				setTimeout('refreshState()', 1000);
			}


			$(document).scroll(function() {
				$('.sidebar-nav').css("marginTop", $(window).scrollTop());
			});
	
		
	</script>
	</body>
</html>
