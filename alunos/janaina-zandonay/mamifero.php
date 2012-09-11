<?php
	require_once "Mamifero.class.php";
?>
<!doctype html>
<html>
	<head>
	</head>
	<body>
		<?php
			$m = new Mamifero;
			$m->setGenero("-");
			$m->setAlimentacao("-");
			
			
		

			echo "<p>" .$m->getGenero() .$m->getAlimentacao();"</p>"
		
			
		?>
	</body>
</html>