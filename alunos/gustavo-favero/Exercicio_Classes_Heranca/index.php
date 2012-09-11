<?php
	require_once "class/carro.class.php";
	require_once "class/pc.class.php";
	require_once "class/animal.class.php";
	require_once "class/mamifero.class.php";
	require_once "class/pessoa.class.php";
	require_once "class/urso.class.php";
	require_once "class/pessoafisica.class.php";
	require_once "class/pessoajuridica.class.php";			
	require_once "class/taxi.class.php";
?>
<!DOCTYPE html>
<html>
    <head>
   		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   		<title>Classes</title>
    </head>
    <body>
    	<?php
			$carro = new Carro();
			
			$carro->setPlaca("MFF-8842");
			$carro->setModelo("Palio");
			$carro->setMarca("Fiat");
			$carro->setAno("2009");
			
			echo "<strong><p>Carro</p></strong>";
			echo "<p>".$carro->getModelo()."</p>";
			echo "<p>".$carro->getPlaca()."</p>";
			echo "<p>".$carro->getMarca()."</p>";
			echo "<p>".$carro->getAno()."</p>";
			
			$pc = new Pc();
			
			$pc->setHd("1tb");
			$pc->setMemoria("4GB");
			$pc->setProcessador("Intel I5");
			$pc->setPlacavideo("ATI Radeon 4000");
			
			echo "<strong><p>Computador</p></strong>";
			echo "<p>".$pc->getHd()."</p>";
			echo "<p>".$pc->getMemoria()."</p>";
			echo "<p>".$pc->getProcessador()."</p>";
			echo "<p>".$pc->getPlacavideo()."</p>";
			
			$animal = new Animal();
			
			$animal->setSexo("Macho");
			$animal->setEspecie("Canis rufus");
			
			echo "<strong><p>Animal</p></strong>";
			echo "<p>".$animal->getSexo()."</p>";
			echo "<p>".$animal->getEspecie()."</p>";
			
			$mamifero = new Mamifero();
			
			$mamifero->setGenero("Canis");
			$mamifero->setAlimentacao("Carne");
			
			echo "<strong><p>Mamifero</p></strong>";
			echo "<p>".$mamifero->getGenero()."</p>";
			echo "<p>".$mamifero->getAlimentacao()."</p>";	
			
			$pessoa = new Pessoa();
			
			$pessoa->setRg("0123456");
			$pessoa->setDataNasc("05/08/1980");
			$pessoa->setCarro("Vectra");
			
			echo "<strong><p>Pessoa</p></strong>";
			echo "<p>".$pessoa->getRg()."</p>";
			echo "<p>".$pessoa->getDataNasc()."</p>";			
			echo "<p>".$pessoa->getCarro()."</p>";
			
			$pessoafisica = new PessoaFisica();
			
			$pessoafisica->setCpf("01234562814");
			
			echo "<strong><p>Pessoa Fisica</p></strong>";
			echo "<p>".$pessoafisica->getCpf()."</p>";
			
			$pessoajuridica = new PessoaJuridica();
			
			$pessoajuridica->setCnpj("01234525262814");
			
			echo "<strong><p>Pessoa Juridica</p></strong>";
			echo "<p>".$pessoajuridica->getCnpj()."</p>";		
		
			$taxi = new Taxi();
			
			$taxi->setRegistro("526");
			$taxi->setTaximetro("Taximetro 021");
			
			echo "<strong><p>Taxi</p></strong>";
			echo "<p>".$taxi->getRegistro()."</p>";
			echo "<p>".$taxi->getTaximetro()."</p>";	
		?>    	
    </body>
</html>