<!doctype html>
<html>
	<head>
		<title>Exercicio 06</title>
	</head>
	<body>
		<h1>Exercicio 06</h1>
				
		<?php
			$val1 = "texto um";
			$val2 = 123;
			$val3 = 45.67;
			$val4 = array("Jana", "Joao");
			$val5 = -133;
			$val6 =456;
			
			echo(gettype($val1));
					
			echo $juntar = implode("-", $val4);
			
			echo $separar = explode("-", $val1);
		?>
		
	</body>
</html>