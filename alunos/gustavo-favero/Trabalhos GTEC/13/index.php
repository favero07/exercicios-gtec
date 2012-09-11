<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Descobrindo Valores</title>
	<style>
		h1{
			text-align:center;	
		}
	</style>
</head>

<body>
	<h1>Tipos de Valores</h1>
    
    <?php 
		function eco($texto){
		echo "<p>" . $texto . "</p>";	
		}
		$valor1="texto";
		$valor2=123;
		$valor3=45.67;
		$valor4=array("peste bubonica","lepra","cancer");
		$valor5=true;
		$valor6=-123;
		$valor7="456";
		$valor8="3 porquinhos";
	?>
    <pre>
    <?php
		eco(gettype($valor1));
		eco(gettype($valor2));
		
		var_dump((int)$valor1); //0
		var_dump((int)$valor7); //456
		var_dump((int)$valor8); //3
		
		var_dump((string)$valor2);
		var_dump((array)$valor1);
		var_dump((string)$valor4);
		var_dump((float)$valor2);
		var_dump((string)"R$: $valor3");
	?>
    </pre>
</body>
</html>