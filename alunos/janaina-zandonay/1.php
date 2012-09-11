<?php
	require_once "Carro.class.php";
?>
<!doctype html>
<html>
	<head>
	</head>
	<body>
		<?php
			$carro = new Carro;
			$carro->setPlaca("MMA-2525");
			echo "<p>" . $carro->getPlaca();"</p>"
			
		?>
	</body>
</html>