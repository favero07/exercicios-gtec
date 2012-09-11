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
        <br />Pergunta 1 é qualquer coisa, escreva sua resposta
        <input type="text" name="resposta" />
		<br /><input type="submit" value="Pronto" />
    </form>
 	<?php
		$array["index"] = "value";
		
		// vetores, listas, matrizes
		$vetor = array("texto");
		$vetor[0] = "texto";
		$vetor["texto"] = "ola mundo";
		
		//dicionarios
		$pessoa["nome"] = "pedro";
		$pessoa = array("nome" => "pedro");
		
		//problema
		$pessoa[0];

		$nome = "Rafael";
		$lista["Rafael"] = 30;
		
		//echo $lista[$nome];
		
		$matriz[][];
		
		$frutas = array("maça");
		$frutas[] = "pera";
		
		for($i=0; $i <count($frutas); $i++){
			echo "$frutas[$i]";	
		}
		
		$meses = array("Janeiro","Fevereiro");
		
	if(isset($_POST["resposta"])){
		$resposta = $_POST["resposta"];
		$resposta = strtoupper($resposta);
		switch($resposta){
			case 'S':
				echo "Sim";
				break;
			case 'N':
				echo "Não";
				break;	
			default:
				echo "Resposta inválida";
				break;
		}
	}
	?>   
</body>
</html>