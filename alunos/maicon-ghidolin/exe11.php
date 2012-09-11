<?php 
	require_once "carro.class.php";
 ?>
<!doctype html>
<html>
	<head>
		<title>OO</title>
		<meta charset = "utf-8">
	</head>
	<body>
		<?php 
			$carro = new carro();

			//$carro->placa

			$carro->setplaca("dqi-7449");

			echo "<p>".$carro->getplaca()."</p>"


		 ?>
	</body>
</html>