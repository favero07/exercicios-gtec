<!doctype html>
<html>
	<head>
		<title>Calculadora</title>
	</head>

	<body>
		<h1>Operacoes aritmeticas</h1>
		<?php
			function eco($texto){
				echo $texto . "<br/>";
			}
		

			$valor1 = 10;
			$valor2 = 20;
		
			$soma = $valor1 + $valor2;
			$subtracao = $valor1 - $valor2;
			$divisao = $valor1 / $valor2;
			$multiplica = $valor1 * $valor2;
			$modulo = $valor1 % $valor2;

			eco($soma);
			eco($subtracao);
			eco($divisao);
			eco($multiplica);
			eco($modulo);

		?>

	</body>
</html>