<?php
	require_once "Animal.class.php";
?>
<!doctype html>
<html>
	<head>
	</head>
	<body>
		<?php
			$a = new Animal;
			$a->setSexo("Masculino");
			$a->setEspecie("Humano");
			
			
		

			echo "<p>" .$a->getSexo() .$a->getEspecie();"</p>"
		
			
		?>
	</body>
</html>