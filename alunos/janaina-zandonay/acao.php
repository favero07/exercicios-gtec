<html>
<head>
</head>
<body>	
	
		<?php
		
		$nome = $_POST["nomedupla"];
		$p1 = $_POST["um"];
		$p2 = $_POST["dois"];
		$email = $_POST["email"];
		$ano = $_POST["ano"];
		$musicas = $_POST["musicas"];
		
		
		function validaAno($ano){
			if (preg_match('/^\d{4}$/', $ano)) {
				return true;
			}
			return false;
		}

		function validaEmail($email){
			if (preg_match('/^([0-9a-zA-Z]+([_.-]?[0-9a-zA-Z]+)*@[0-9a-zA-Z]+[0-9,a-z,A-Z,.,-]*(.){1}[a-zA-Z]{2,4})+$/', $email)) {
				return true;
			}
			return false;
		}
  
  
		if(($nome=="") || ($p1=="") || ($p2=="") || ($email=="") || ($ano=="")){
				echo("Todos os campos são obrigatórios!");
		}else{
			if(!validaEmail($email)){
					echo "<p>E-mail invalido!</p>";
					echo " - <a href='/gtec/exercicio8.php'>Voltar</a>";
			}else if (!validaAno($ano)) {
					echo "<p>Ano invalido!</p>";
					echo " - <a href='/gtec/exercicio8.php'>Voltar</a>";
			}else{
					
					echo "<p>Nome da dupla: $nome</p>";
					echo "<p>Player Um: $p1</p>";
					echo "<p>Player Dois: $p2</p>";
					echo "<p>E-mail: $email</p>";
					echo "<p>Ano de criação: $ano</p>";
					
					//$separar = explode("-", $_POST["musicas"]);
					//for($i=0; $i<sizeof($separar); $i++){
						//echo "Musica $i: ".$separar[$i]; 
					//}
				}
			}
		?>
	</body>
</html>	