<?php 
	require_once "animal.class.php";
	require_once "mamifero.class.php";
	require_once "urso.class.php";
	require_once "pessoa.class.php";
	require_once "computador.class.php";
	require_once "carro.class.php";
	require_once "juridica.class.php";
	require_once "fisica.class.php";

 ?>

 <header><h1>Class</h1></header>
 <aside>
	 	<?php 

	 		$carro = new Carro();
	 		echo "<p><h1>"."Carro"."</h1></p>";	
	 		$carro->acelerar();
				$carro->setModelo("Gol");
				$carro->setMarca("VW");
				$carro->setAno("2005");	
				echo "<ul>";
					echo "<li>"."<p>".$carro->getModelo()."</p>"."</li>";
					echo "<li>"."<p>".$carro->getMarca()."</p>"."</li>";
					echo "<li>"."<p>".$carro->getAno()."</p>"."</li>";
				echo "</ul>"; 			
	 		$carro->freiar();


	 		$computador = new Computador();
	 		echo "<p><h1>"."Computador"."</h1></p>";
	 		$computador->ligar();
	 			$computador->setProcessador("Intel i7");
	 			$computador->setHardDisk("800 GB");
	 			$computador->setPlacaVideo("Intel HD Graphics");
	 			echo "<ul>";
					echo "<li>"."<p>".$computador->getProcessador()."</p>"."</li>";
					echo "<li>"."<p>".$computador->getHardDisk()."</p>"."</li>";
					echo "<li>"."<p>".$computador->getPlacaVideo()."</p>"."</li>";
				echo "</ul>"; 
	 		$computador->desligar();


	 		$pessoa = new Pessoa();
	 		echo "<p><h1>"."Pessoa"."</h1></p>";
	 		$pessoa->setDataNascimento("17/07/1995");
	 		$pessoa->setRg("5.104.145-5");
	 		
	 		echo "<ul>";
				echo "<li>"."<p>"."Idade: ".$pessoa->calculaIdade()."</p>"."</li>";
				echo "<li>"."<p>"."RG: ".$pessoa->getRG()."</p>"."</li>";
			echo "</ul>"; 
	 		

	 	 ?>
</aside>
