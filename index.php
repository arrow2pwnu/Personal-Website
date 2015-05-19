<!DOCTYPE html>
<html>
	<head>
		<title>Kian Alikhani</title>
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script> 
		$(function(){
			$("#header").load("header.html"); 
			$("#footer").load("footer.html"); 
		});
		</script>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap-theme.css">
		<link rel="stylesheet" href="css/kianalikhani.css">
	</head>
	<body>
		<div id="header"></div>
		<div id="main-content" class="container">
			<div class="row">
				<div class="col-xs-12">
					<?php
						echo "hello";
					?>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6">
					<h1>Kian Alikhani</h1>
				</div>
				<div class="col-xs-6">
					<h1>Kian Alikhani</h1>
				</div>
			</div>
		</div>
		<script src="js/bootstrap.js"></script>
		<script src="js/kianalikhani.js"></script>
	</body>
	<footer id="footer">
	</footer>
</html>