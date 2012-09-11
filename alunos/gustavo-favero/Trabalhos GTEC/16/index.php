<?php
	require_once "class/carro.class.php";
	require_once "class/pc.class.php";
?>
<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Orientação à Objetos</title>
    </head>
    <body>
    	<?php
			$carro = new Carro();
			
			$carro->setPlaca("AVF-1102");
			$carro->setModelo("Palio");
			$carro->setMarca("Fiat");
			$carro->setAno("2009");
			
			echo "<p>".$carro->getModelo()."</p>";
			echo "<p>".$carro->getPlaca()."</p>";
			echo "<p>".$carro->getMarca()."</p>";
			echo "<p>".$carro->getAno()."</p>";
			
			$pc = new Pc();
			
			$pc->setHd("1tb");
			$pc->setMemoria("4GB");
			$pc->setProcessador("Intel I5");
			$pc->setPlacavideo("ATI Radeon 4000");
			
			echo "<p>".$pc->getHd()."</p>";
			echo "<p>".$pc->getMemoria()."</p>";
			echo "<p>".$pc->getProcessador()."</p>";
			echo "<p>".$pc->getPlacavideo()."</p>";
		?>    	
    </body>
</html>