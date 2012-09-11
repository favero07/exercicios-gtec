
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Exercicio 09</title>
	</head>
	<body>
		<h1>Exercicio 09</h1>
		<a href="/gtec/home.php">Home</a>
		<a href="/gtec/contato.php">Contato</a>
		<a href="/gtec/sobre.php">Sobre</a>
		<?php
			if ($_GET["pagina"]=="contato") {
				include "contato.php";
			} else if ($_GET["pagina"]=="sobre")
				include "sobre.php";
			else if($_GET["pagina"]=="home"){
				include "home.php";
			}
		?>
	</body>
</html>