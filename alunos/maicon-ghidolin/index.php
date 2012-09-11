<?php 
			$title = "Site.com";
			$subtitle = "o melhor da blogosfera &eacute aqui";
			$concatena = "$title - $subtitle";
			$ano = date("Y");
?>

<html>
	<head>
		<title><?php echo $concatena ?></title>
	</head>

	<body>
		<h1>Primeira pagina!</h1>

		<?php
			//phpinfo();
			#
			/*comentario varis linhas*/

			//variavel indic-se com $, sempre minuscula
			$variavel = "valor";
			//inteiro
			$numero = 2;
			//float
			$reais = 2.43;
			$boolean = true;
			$vetor = array();

			echo is_numeric($numero);

			$valor = "3 porquinhos" + 5;
			echo $valor;
			print($reais);
		?>

		<footer>
			
			<p> &reg copyright - 
				<?php echo "$title - $ano"?>
			</p>

			<pre>
				<?php echo $_SERVER["HTTP_USER_AGENT"]; ?>
			</pre>	

		</footer>
	</body>
</html>