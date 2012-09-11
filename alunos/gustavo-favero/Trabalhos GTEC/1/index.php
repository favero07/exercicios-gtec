<?php
	$title = "Site.com";
	$subtitle = "O melhor da blogosfera é aqui";
	$textoConcatenado = "$title - $subtitle";
	$textoConcatenado = $title . " - " . $subtitle;
	//$_SERVER["HTTP_USER_AGENT"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $textoConcatenado ?></title>
</head>

<body>
	<h1>Pagina PHP</h1>
<?php
	if (strstr($_SERVER["HTTP_USER_AGENT"], "MSIE")) {
?>
	<h3>strstr retorna verdadeiro</h3>
	<center><b>Você está usando o Internet Explorer</b></center>
<?php
	}else {
?>
	<h3>strstr retorna falso</h3>
	<center><b>Você não está usando o Internet Explorer</b></center><br />
<?php
	}
?>
<?php
		//phpinfo();
		/*
			Comentarios varias linhas
		*/
		$variavel = "valor";
		$numero = 2;
		$reais = 3.56;
		$boolean = true;
		$vetor = array();
		$variavel = 45;
		
		$numero2 = '2';
		
		//echo is_numeric;
		
		$valor = "porquinhos 5" + 5;
		
		echo $_SERVER["HTTP_USER_AGENT"];
		
		echo $valor; //retorna mensagem com retorno
		
		print $valor; // nao retorna 
		
		//&a acute; = á
		//&a tilde; = ã
		//&c cedil; = ç
		//&reg; = R comercial (marca registrada)
		//date();
	?>
    <p>abaixo é o footer</p>
    
    <footer>
    	<p>&reg; Copyright - 
        	<?php echo $title . " - " . date("Y"); ?>
        </p>
	</footer>
</body>
</html>