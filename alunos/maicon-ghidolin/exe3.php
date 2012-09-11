<html>
	<head>
		<title>Switch</title>
	</head>
	<body>
		<?php
			$nome1 = "maicon";
			$nome2 = "cris";
			$nome3 = "feh :D";
			$sexo1 = "m";
			$sexo2 = "f";
			$sexo3 = "f";

			if (($sexo1 == "m" && $sexo2 == "m") || ($sexo1 == "m" && $sexo3 == "m") || ($sexo2 == "m" && $sexo3 == "m")) {
				echo "A maioria &eacute masculina!";
			}
			else{
				echo "A maioria &eacute feminina!";
			}
		?>
		

	</body>
</html>