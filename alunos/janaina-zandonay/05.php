<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Meses</title>
	</head>
	<body>

		<?php
		
			function eco($texto){
				echo "<p>".$texto."</p>";
			}
			
			$mes = "8";
			

			switch ($mes) {
				case "1":
					eco("Janeiro");
				break;
				case "2":
					eco ("Fevereiro");
				break;
				case "3":
					eco ("Marco");
				break;
				case "4":
					eco("Abril");
				break;
				case "5":
					eco ("Maio");
				break;
				case "6":
					eco ("Junho");
				break;
				case "7":
					eco("Julho");
				break;
				case "8":
					eco ("Agosto");
				break;
				case "9":
					eco ("Setembro");
				break;
				case "10":
					eco("Outubro");
				break;
				case "11":
					eco ("Novembro");
				break;
				case "12":
					eco ("Dezembro");
				break;
			}


						
		?>

	</body>
</html>