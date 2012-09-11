<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sexo/Equipes</title>
	</head>
	<body>

		<?php
		
			function eco($texto){
				echo "<p>".$texto."</p>";
			}
			
			$nome1 = "Maria";
			$nome2 = "Joana";
			$nome3 = "Joao";
			$sexo1 = "F";
			$sexo2 = "F";
			$sexo3 = "M";
			
			eco($nome1); eco($sexo1); 
			eco($nome2); eco($sexo2);
			eco($nome3); eco($sexo3);
			
			
			
			
			if($sexo1 && $sexo2 == "F" || $sexo1 && $sexo3 == "F" || $sexo2 && $sexo3 == "F"){
				eco("Maioria feminino!");
			}else{
				eco("Maioria masculino!");
			}			
			
		?>

	</body>
</html>