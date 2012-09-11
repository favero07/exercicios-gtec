

<header><h1>Calculadora</h1></header>

<?php
	if(!empty($_POST["valor1"])  && !empty($_POST["valor2"]) ){
		function eco($texto){
			echo $texto;
		}


		$valor1 = $_POST["valor1"];
		$valor2 = $_POST["valor2"];

		$soma = $valor1 + $valor2;
		$subtracao = $valor1 - $valor2;
		$divisao = $valor1 / $valor2;
		$multiplica = $valor1 * $valor2;
		$modulo = $valor1 % $valor2;

		echo "<p>Soma: ";eco($soma)."</p>";
		echo "<p>Subtracao: ";eco($subtracao)."</p>";
		echo "<p>Divisao: ";eco($divisao)."</p>";
		echo "<p>Multiplicacao: " ;eco($multiplica)."</p>";
		echo "<p>Modulo: " ;eco($modulo)."</p>";
	}
	else{
		echo "<p>Voce deve prencher todos os campos!</p>";
		echo "<a href='index.php'>Voltar</a>";
	}
?>

