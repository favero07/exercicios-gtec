<!doctype html>
<html>
	<head>
		<title>Exercicio 07</title>
	</head>
	<body>
		<h1>Exercicio 07</h1>
		
		<!--A-->	
		<?php
			
			$nome = "       Janaina Zandonay        ";
			$nome = trim($nome);
		?>
			<p><?php echo($nome); ?> </p>
			
			
		<!--B-->
		<?php
			$rest1 = substr("abcdef", -1);    // retorna "f"
			$rest2 = substr("abcdef", -2);    // retorna "ef"
			$rest3 = substr("abcdef", -3, 1); // retorna "d"
		?>
			<p><?php echo($rest1); ?> </p>
			<p><?php echo($rest2); ?> </p>
			<p><?php echo($rest3); ?> </p>
			
		<!--C-->
		<?php
			$texto = "GERACAO TEC";
		?>
		<p><?php echo strtolower($texto); ?> </p>
			
		<!--D-->
		<?php
			$texto1 = "geracao tec";
		?>
		<p><?php echo strtoupper($texto1); ?> </p>
		
		<!--E-->
		<p><?php echo ucfirst("hello world"); ?></p>
		
		<!--F-->
		<p><?php echo ucwords("hello world"); ?></p>
		
		<!--G-->
		<?php
			$vet = array("Janaina", "Zandonay");
		?>
		<p><?php echo join(" ",$vet);?></p>
		
		<!--H-->
		<?php
			if(isset($vet)) {
				echo $vet;
			}
		?>
		<!--I-->
		<?php
			$str = 'Jana';
		?>
		<p><?php echo strlen($str);?></p>
		
		<!--J-->
		<?
			$valor = 1;

			if(is_float($valor)){
				echo ("A variável $valor e do tipo float");
			}else{
				echo ("A variavel $valor nao e do tipo float");
			}
		?>
		
		<!--K-->
		<p><?php print_r(getdate()); ?></p>
		
		<!--L-->
		<?php
			$nome = "";

			if (empty($nome)) {
				echo ("Por favor, preencha o seu nome");
			}else{
				echo("Campo preenchido corretamente");
			}
		?>
		
		<!--M-->
		<?php
			$teste = ("Hello <b> world</b>");
		?>
		<p><?php echo strip_tags($teste);?></p>
		
		
		
		
		
		
		
		
		
		
		
	</body>
</html