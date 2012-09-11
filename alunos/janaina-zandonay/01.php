<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Formulario</title>
	</head>
	<body>
		
		
			<form action="acao.php" method="POST">
			Seu nome <input type="text" name="nome"/>
			Sua idade <input type="text" name="idade"/>
			<input type="submit"/>
			</form>
			
			Oi<?php echo $_POST["nome"]; ?>
			Voce tem <?php echo $_POST["idade"]; ?> anos.
			
		

	</body>
</html>