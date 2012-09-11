<?php
	require_once "class/animal.class.php";
	require_once "class/mamifero.class.php";
	require_once "class/urso.class.php";
	require_once "class/pessoa.class.php";
	require_once "class/pessoaFisica.class.php";
	require_once "class/pessoaJuridica.class.php";
	require_once "class/pc.class.php";
	require_once "class/carro.class.php";
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
			echo "<p>".$carro->getPlaca()."</p>";
			
			$pc = new Pc();
			$pc->setHd("1tb");
			echo "<p>".$pc->getHd()."</p>";
			
			$pessoaFisica = new PessoaFisica();
			$pessoaFisica->setRg("1234567890");
			echo "<p>".$pessoaFisica->getRg()."</p>";
			
			$pessoaJuridica = new pessoaJuridica();
			$pessoaJuridica->setsexo("Masculino");
			echo "<p>".$pessoaJuridica->getSexo()."</p>";
			
		?>    	
    </body>
</html>