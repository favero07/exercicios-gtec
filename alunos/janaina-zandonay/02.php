<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Calculadora/Media</title>
	</head>
	<body>
		<h1>Operacoes Aritmeticas</h1>
		<?php
		
			function eco($texto){
				echo "<p>".$texto."</p>";
			}
			
			$valor1 = 10;
			$valor2 = 50;
			
			$soma = $valor1 + $valor2;
			$subtracao = $valor1 - $valor2;
			$multiplicacao= $valor1 * $valor2;
			$divisao = $valor1 / $valor2;
			$modulo = $valor1 % $valor2;
			
			eco($soma); 
			eco($subtracao);
			eco($multiplicacao);
			eco($divisao);
			eco($modulo);
			
			echo "<hr/>";
			$parImpar = 20;
			if($parImpar % 2 == 0){
				eco("O num e PAR");
			}else{
				eco("O num e IMPAR");
			}
			
			echo "<hr/>";
			
			$n1 = 1;
			$n2 = 0;
			$n3 = 2.4;
			$n4 = 7;
			
			$media = ($n1+$n2+$n3+$n4) / 4;
			
			if($media<3){
				eco("Mau aluno");
			}
			if($media <7){
				eco("Esta Reprovado");
			}else{
				eco("Esta Aprovado");
			}
			
		?>

	</body>
</html>