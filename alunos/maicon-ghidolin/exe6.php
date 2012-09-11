<?php 
		require_once "includes/functions.php";
		 ?>
<html>
	<head>
		<title>Calculadora</title>
	</head>
	<body>
		<?php 
			$num1 = 30;
			$num2 = 10;
		 ?>
		<p>Soma:<?php 
			$som = soma($num1 ,$num2); 
			eco($som);
		?></p>

		<p> Subtracao:<?php echo sub($num1, $num2); ?> </p>

		<p> Divisao:<?php echo div($num1 ,$num2); ?></p>

		<p> Multiplicacao: <?php echo mult($num1,$num2); ?></p>

		<p> Modulo: <?php echo mod($num1, $num2); ?></p>

	</body>
</html>