<!doctype html>
<html lang="de">
	<head>
		<meta charset="utf-8">
		<title>Test mit PHP</title>
	</head>
	<body>

			HTML
			<?php 	
				phpinfo();
				$var = "Variable";
					/* 	Kommentare in php sind quasi 
					so wie in sas */
				echo "<br> php $var"; // einzeilige
									 // kommentare sind nicht wie in sas
			?> 	
		<br>
			Zahlbetrag
		<br>
		<br>
			<?php 
			phpinfo ();
				$liter = 5;
				$menge = 1.5;
				$preis = $liter * $menge;
				echo $preis;
			
				echo "<br>";
			
				$test1 = "test";
				$test2 = "testtest";
				$test3 = "$test1$test2";
				echo $test3;
			?>
	</body>
</html>