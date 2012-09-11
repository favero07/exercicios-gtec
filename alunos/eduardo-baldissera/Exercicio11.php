<?php

require_once "carro.class.php";
?>	
<!doctype html>		
<html>
	<head>
		<title>Exercicio 11</title>
	</head>
	<body>
	 <h1>Exercicio 11</h1>
	 	 <?php
		 $carro = new Carro();
		 
		 $carro->setPlaca("NFE-12345");
		 
		 echo "<p>" . $carro->getPlaca(). "</p>";
		 
	 	?>	
	</body>
</html>