<?php
	require_once "Urso.class.php";
?>
<!doctype html>
<html>
	<head>
	</head>
	<body>
		<?php
			$u = new Urso;
			$u->setCorPelo("-");
			$u->setPeso("-");
			
			
		

			echo "<p>" .$u->getCorPelo() .$u->getPeso();"</p>"
		
			
		?>
	</body>
</html>