<?php
	require_once "Computador.class.php";
?>
<!doctype html>
<html>
	<head>
	</head>
	<body>
		<?php
			$pc = new Computador;
			$pc->setProcessador("Pentium I-7");
			$pc->setMemoria("6 GB");
			$pc->setHardDisk("SSD");
			$pc->setPlacaVideo("NVidea");
			
		

			echo "<p>" .$pc->getProcessador() .$pc->getMemoria() .$pc->getHardDisk() .$pc->getPlacaVideo();"</p>"
			
		?>
	</body>
</html>