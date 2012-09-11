
<html>
	<head>
		<link rel="stylesheet" href="../estilo.css" type="text/css"  />
	</head>
	<body>
		<h2>Exercicio 3</h2>
		
		<div id="exerc" >
		<form method="post">
			<fieldset >
				<legend>Informar o sexo predominante na equipe</legend>
				<label>Nome do 1° membro: <br><input type="text" name="nome1"><br></label>
				<label>Sexo do 1° membro: <br><input type="text" name="sexo1"><br></label>
				<label>Nome do 2° membro: <br><input type="text" name="nome2"><br></label>
				<label>Sexo do 2° membro: <br><input type="text" name="sexo2"><br></label>
				<label>Nome do 3° membro: <br><input type="text" name="nome3"><br></label>
				<label>Sexo do 3° membro: <br><input type="text" name="sexo3"><br></label>
				<label>Nome do 4° membro: <br><input type="text" name="nome4"><br></label>
				<label>Sexo do 4° membro: <br><input type="text" name="sexo4"><br></label>
				<label><input type="submit" name="sel" value="Enviar"></label>
			</fieldset>
		</form>
		</div>
		
		<div id="exerc">
			<?php
				if ($_POST){
					$nomes=array(3);
					$sexo=array(3);
					$i=0;
					$nomes[$i]=$_POST["nome1"];
					$sexo[$i]=$_POST["sexo1"];
					$i++;
					$nomes[$i]=$_POST["nome2"];
					$sexo[$i]=$_POST["sexo2"];
					$i++;
					$nomes[$i]=$_POST["nome3"];
					$sexo[$i]=$_POST["sexo3"];
					$i++;
					$nomes[$i]=$_POST["nome1"];
					$sexo[$i]=$_POST["sexo1"];
			
					$i=0;
					$feminino=0;
					$masc=0;
					while($i<3){
						if($sexo[$i] == "f" || $sexo[$i] == "F"){
							$feminino++;
						}
						if($sexo[$i] == "m" || $sexo[$i] == "M"){
							$masc++;
						}
						$i++;
					}
					
						if($masc >$feminino){
							echo " O sexo predominante na equipe é o masculino.";
						}
						else{
							echo " O sexo predominante na equipe é o feminino.";
						}
						echo '<br><a href="index.php?pagina=e3">voltar</a>';
					}
			?>
		</div>
		
	</body>
</html>