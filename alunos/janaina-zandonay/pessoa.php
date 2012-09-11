<?php
	require_once "Pessoa.class.php";
?>
<!doctype html>
<html>
	<head>
	</head>
	<body>
		<?php
			$p = new Pessoa;
			$p->setRg("-");
			$p->setDataNasc("-");
			
			
		

			echo "<p>" .$p->getRg() .$p->getDataNasc();"</p>"
		
			
		?>
	</body>
</html>