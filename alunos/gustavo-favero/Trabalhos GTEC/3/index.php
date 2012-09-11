

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Calculadora</title>
</head>

<body>
	<h1 align="center">Calculadora</h1>

	<?php
		function eco($texto){
			echo "<p>" . $texto . "</p>";	
		}

		/*$n1 = 10;
		$n2 = 20; */
		$soma = $_POST["n1"] + $_POST["n2"];
		$subtracao = $_POST["n1"] - $_POST["n2"];
		$multiplicacao = $_POST["n1"] * $_POST["n2"];
		$divisao = $_POST["n1"] / $_POST["n2"];
		$modulo = $_POST["n1"] % $_POST["n2"];
		
		eco($soma);
		eco($subtracao);
		eco($multiplicacao);
		eco($divisao);
		eco($modulo);
	
	?>
</body>
</html>