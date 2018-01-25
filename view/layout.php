<!DOCTYPE html>
<html>
<head>
	<title>Sentiment App</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>  	
</head>
<body>
	<style type="text/css">
		h2 {
			color :  #cc3a26;
			padding: 8px;
		}

		#border-line {
			border: 1px solid  #cc3a26;
			margin-bottom: 30px;
		}

		footer {
			margin-top: 30px;
			font-size: 12px;
		}
	</style>

	<header>
		<h2> Sentiment App </h2>
	</header>
	<div id="border-line"></div>
	<?php
		require_once('routes.php');
	?>

	<footer>
		<center>Copyright &#169; Leo Nadeak</center>
	</footer>
</body>
</html>