<?php
	require_once "includes/function.php";
?>
<!doctype html>
<html>
	<head>
		<title>Exercicio 05</title>
	</head>
	<body>
		<h1>Exercicio 05</h1>
		<?php 
		//$empresas = array("Apple", "Microsoft");
		
		//<br/>
		//<?php
			$empresas[] = "Microsoft";
			$empresas[] = "Apple";
			$empresas[] = "Lala";
		?>
		
		<p> Mostrando os tres primeiros itens:</p>
		<pre><?php var_dump($empresas);?></pre>
		
		<p>Lista de Empresas - usando FOR</p>
		<ul>
			<?php for ($i=0; $i< count($empresas); $i++) {?>
				<li><?php echo "posicao: $i, valor: $empresas[$i]"; ?></li>
			<?php } ?>
		</ul>
			
		<p>Lista de Empresas - usando FOREACH</p>
		<ul>
			<?php foreach($empresas as $index=>$value){?>
				<li><?php echo "Indice: $index, Valor: $value";?></li>
			<?php } ?>
		</ul>
		
		
		<?php
			$churrasco[] = "Carne";
			$churrasco[] = "Carvao";
			$churrasco[] = "Maionese";
			$churrasco[] = "Pao";
			$churrasco[] = "Cerveja";
		?>
		<ul>
			<?php for ($i=0; $i< count($churrasco); $i++) {?>
				<li><?php echo " $i: $churrasco[$i]"; ?></li>
			<?php } ?>
		</ul>
		
		<?php
			$computador["Processador"] = "Pentium 500"; 
			$computador["Memoria"] = 256;
			
		?>
		<ul>
			<?php foreach($computador as $index=>$value){?>
				<li><?php echo "Indice: $index: $value";?></li>
			<?php } ?>
		</ul>
		
		
		
		
		
		
	</body>
</html>