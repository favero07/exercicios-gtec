<html>
	<head>
		<title>Exercicio 05</title>
	</head>
	<body>
	 <h1>Exercicio 05</h1>
	 
	 <?php
		$empresas = array("Apple", "Nokia", "Samsung");
		//$empresas = array(0 => "Apple", 1 => "Nokia", 2 => "Samsung");
	?>	
	
	<p> Mostrando os 3 primeiros itens:</p>
	<pre> <?php var_dump($empresas);?></pre>
	
	<?php
		$empresas[]="Microsoft";
		$empresas[]="Oracle";
		$empresas[]="Hueb Labs";
	?>
	
	<p> Mostrando o array completo com os novos itens: </p>
	<pre><?php var_dump($empresas);?></pre>
	 </body>
</html>