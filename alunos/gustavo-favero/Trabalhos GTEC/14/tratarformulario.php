<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Resultado</title>	
	<style>
		h1{
			text-align:center;	
		}
	</style>
</head>

<body>
    
    <?php
		require_once("index.php");
		
		function eco($texto){
			echo "<p>" . $texto . "</p>";	
		}
	?>

	<?php
	
		$musicas = $_POST["musicas"];
		$musica = explode(",", $_POST["musicas"]);
		$anoregex="/[0-9]+/";
	
		if(isset($_POST["submetido"]) && $_POST["submetido"]==1){
			$erros = "";
			if(empty($_POST["banda"])){
				$erros = "Ajuste o nome da banda";
			}
			if(empty($_POST["nome1"])){
				if($erros){
					$erros .= ", nome 1";
				}else{
					$erros = "Ajuste o nome 1.";
				}
			}
			if(empty($_POST["nome2"])){
				if($erros){
					$erros .= ", nome 2";
				}else{
					$erros = "Ajuste o nome 2.";
				}
			}
			if(empty($_POST["email"])){
				if($erros){
					$erros .= ", email";
				}else{
					$erros = "Ajuste o email.";
				}
			}
			if(empty($_POST["ano"])){
				if($erros){
					$erros .= " e ano.";
				}else{
					$erros = "Ajuste o ano.";
				}
			}
			if($anoregex){
					
			}
			
			if(!empty($erros)){
				?><p align="center"><?php echo $erros;?></p> <?php
			}else{
				?><p align="center">
					<?php echo "<br>Formulário enviado!<br>"; 
						  echo "<br>Banda " . $_POST["banda"] . "<br>";
						  echo "<br>Integrantes " . $_POST["nome1"] . " e " . $_POST["nome2"] . ".<br>";
						  echo "<br>Email: " . $_POST["email"] . "<br>";
						  echo "<br>Ano de criação: " . $_POST["ano"] . "<br>";
						  //echo $musica[0];
						  echo "<br>Musicas:";
						  foreach($musica as $index => $value){
						  	echo "<br>$index: $value";
						  }
					?>
                </p>
	<?php
			}
		}
	?>
    
    
    
    <?php /*
		$banda = $_POST["banda"];
		$nome1 = $_POST["nome1"];
		$nome2 = $_POST["nome2"];
		$email = $_POST["email"];
	*/?>

</body>
</html>