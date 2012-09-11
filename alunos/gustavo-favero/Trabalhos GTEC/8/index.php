<?php
	function eco($texto){
		echo "<p>" . $texto . "</p>";	
	}
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
	<form method="post" action="index.php">
        <br />Pergunta: Qual é o mes?
        <input type="text" name="resposta" />
		<br /><input type="submit" value="Pronto" />
    </form>
 	<?php
		$array["index"] = "value";
		
		$meses = array("1" => "Janeiro","2" => "Fevereiro","3" => "Março","4" => "Abril","5" => "Maio","6" => "Junho","7" => "Julho","8" => "Agosto");
		if(isset($_POST["resposta"])){ 
			if($_POST["resposta"] > 0 && $_POST["resposta"] <13){
				$i = $_POST["resposta"];
				echo $meses[$i];
			}else{
				echo "Numero de mês inválido";	
			}
		}
	?>   
</body>
</html>