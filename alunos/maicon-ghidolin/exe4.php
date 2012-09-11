<html>
	<head>
		<title>Resposta</title>
	</head>
	<body>
		<?php
			$resposta = "S";

			/*strtupper: coloca letras em maiusulo
			strtolower: coloca letras em minusculo*/

			switch ($resposta) {
				case "S":
					echo "Sua resposta foi sim!";
				break;

				case "N":
					echo "Sua resposta foi nao!";
				break;
				
				default:
					echo "Resposta invalida";
				break;
			}
		?>
	</body>
</html>