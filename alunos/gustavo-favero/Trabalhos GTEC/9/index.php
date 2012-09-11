<?php
	require_once "includes/functions.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Formulario</title>
	<style>
		h1{
			text-align:center;	
		}
	</style>
</head>

<body>
	<h1>Pergunta</h1>
	<form action="tratarformulario.php" method="post">
        <br />Numero 1:
        <input type="text" name="n1" />
        <br />Numero 2:
        <input type="text" name="n2" />
        <br />Digite o que deseja: Somar, Subtrair, Multiplicar:
        <input type="text" name="op" />
		<br /><input type="submit" value="Pronto" />
    </form>

    
</body>
</html>