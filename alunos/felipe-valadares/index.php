<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
		<?php
			$title = "Site.com ";
			$subtitle = "o melhor da blogosfera é aqui";
			echo "<title>".$title.$subtitle."</title>";
		?>
	<link rel="stylesheet" href="estilo.css" type="text/css" />

</head>
<body>

	<?php include("includes/topo.php"); ?>

	<div id="menu">
		<ul>
			<li><a href="index.php?pagina=principal">Principal</a></li>
			<li><a href="index.php?pagina=e1">Exercício 1</a></li>
			<li><a href="index.php?pagina=e2">Exercicio 2</a></li>
			<li><a href="index.php?pagina=e3">Exercício 3</a></li>
			<li><a href="index.php?pagina=e4">Exercício 4</a></li>
			<li><a href="index.php?pagina=e5">Exercício 5</a></li>
			<li><a href="index.php?pagina=e6">Exercício 6</a></li>
			<li><a href="index.php?pagina=e8">Exercício 8</a></li>
			<li><a href="index.php?pagina=e9">Exercício 9</a></li>
			
		</ul>
	</div>

	<div id="conteudo">
		<?php

		$pagina = $_GET["pagina"];

		switch($pagina){
			case "principal":
				include("paginas/principal.php");
				break;
			case "e1":
				include("paginas/e1.php");
				break;
			case "e2":
				include("paginas/e2.php");
				break;
			case "e3":
				include("paginas/e3.php");
				break;
			case "e4":
				include("paginas/e4.php");
				break;
			case "e5":
				include("paginas/e5.php");
				break;
			case "e6":
				include("paginas/e6.php");
				break;
			case "e8":
				include("paginas/e8.php");
				break;
			case "e9":
				include("paginas/e9.php");
				break;
			default:
				include("paginas/principal.php");
		}

		?>
	</div>
	
	<div id="rodape">
		<footer align="center">
			<?php echo "&reg; Copyright - Felipe Valadares - Geração Tec ".date("o"); ?>
		</footer>
	</div>
</body>
</html>
