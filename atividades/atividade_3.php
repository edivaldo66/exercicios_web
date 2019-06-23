<link rel="stylesheet" type="text/css" href="./css/bootstrap_css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/estilo.css">

<?php

	$x = 1;

	for ($i=1; $i < 10 ; $i++) { 
		echo "<table table class='table table-bordered table-dark'><td><th>" . $i * 2 . "<br>". "</td></tr></table>";
	}
?>