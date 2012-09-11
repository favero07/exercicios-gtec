<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Vetor</title>
	</head>
	<body>

		<?php
		
			function eco($texto){
				echo "<p>".$texto."</p>";
			}
			//vetores, listas,matrizes	
			$vetor = array();
			$vetor[0] = "texto";
			$vetor["teste"] = "ola mundo";
			
			//dicionarios
			$pessoa["nome"] = "jose";
			$pessoa = array("nome" => "jose");

			// $matriz[][];
			$frutas = array("maça");
			$frutas[] = "pera";
			for($i=0; $i<count($frutas); $i++){
				eco($frutas[$i]);
			}
			
		?>

	</body>
</html>