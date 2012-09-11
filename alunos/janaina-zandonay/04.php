<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Resposta</title>
	</head>
	<body>

		<?php
		
			function eco($texto){
				echo "<p>".$texto."</p>";
			}
			
			$resposta = "L";
			

			switch ($resposta) {
				case "S":
					eco("Resposta igual a sim");
				break;
				case "N":
					eco ("Resposta igual a nao");
				break;
				default:
					eco ("Resposta invalida");
				break;
			}


						
		?>

	</body>
</html>