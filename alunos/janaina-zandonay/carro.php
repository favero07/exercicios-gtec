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
			$carro->setMarca("VW");
			$carro->setModelo("Gol");
			$carro->setAno("2012");
			
		

			echo "<p>" .$carro->getPlaca() .$carro->getMarca() .$carro->getModelo() .$carro->getAno();"</p>"
			
		?>
	</body>
</html>