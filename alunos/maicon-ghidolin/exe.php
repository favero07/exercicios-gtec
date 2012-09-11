<html>
	<head>
			<title>exe</title>
	</head>

	<body>	
		<?php
			$int = 5;
			$float = 4.2;
			$name = "maicon";
			
			var_dump($name);
			print_r($float);
			var_export($int);
			echo "<br/>";
			echo intval($float);
			echo "<br/>";
			echo "Meu nome &eacute $name";
		?>
		<form action = "teste.php"  method="POST">
			Nome:<input type = "text" name = "nome"/><br/>
			Idade:<input type = "text" name = "idade"/><br/>
			<input type = "submit">
		</form>	
	</body>
</html>