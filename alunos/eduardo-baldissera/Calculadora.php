<html>
<head>
	<title>Exercicio 2</title>
</head>
<body>

<h1> Operações Aritiméticas </h1>
<?php
	function eco($texto){
	 echo "<p>".$texto."</p>";
	}

	$valor1 = 10;
	$valor2 = 20;
	
	$soma = $valor1+$valor2;
	$subtracao = $valor1-$valor2;
	$multiplicacao = $valor1*$valor2;
	$divisao = $valor1/$valor2;
	$modulo = $valor1%$valor2;
	
	eco($soma);
	eco($subtracao);
	eco($multiplicacao);
	eco($divisao);
	eco($modulo);
	
	$parImpar = 13;
	if($parImpar%2==0){
		eco("O num é PAR");
	}else{
		eco("O num é IMPAR");
	}
	
	echo "<hr/>";
	
	$n1 = 9.67;
	$n2 = 9;
	$n3 = 9.4;
	$n4 = 9;
	
	$media = ($n1 + $n2 + $n3 + $n4)/4;
	if($media < 3){
		eco("Mau Aluno!");
	}if ($media < 7){
		eco("Está Repovado!!");
	}else{
		eco("Esta Aprovado!!");
		
		echo $media
	}
	
?>
</body>
</html>