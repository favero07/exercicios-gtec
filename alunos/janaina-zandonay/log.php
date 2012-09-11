<!doctype html>
<html>
	<head>
	</head>
	<body>
		<?php
			$login[usuario] = $_POST["nome"];
			$login[senha] = $_POST["senha"];
			
			echo "<p> Usuario: $login[usuario]</p>";
			echo md5($login[senha]);
		?>
	</body>
</html>