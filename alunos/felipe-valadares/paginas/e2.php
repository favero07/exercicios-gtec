
<html>
	<head>
		<link rel="stylesheet" href="../estilo.css" type="text/css"  />
	</head>
	
	<body>
		<h2>Exercicio 2</h2>
		
		<div>
			<form  method="post" >
				<fieldset id="exerc">
					<legend>Calcular a média de 4 notas</legend>
					<label>Nota 1 <br><input type="text" name="valor1"><br></label>
					<label>Nota 2 <br><input type="text" name="valor2"><br><br></label>
					<label>Nota 3 <br><input type="text" name="valor3"><br></label>
					<label>Nota 4 <br><input type="text" name="valor4"><br><br></label>
					<label><input type="submit" name="sel" value="Calcular"></label>
				</fieldset>
			</form>
		</div>	
		
		<div>
		<form  method="post">
			<fieldset id="exerc">
				<legend>Calculadora</legend>
				<label>Valor 1 <br><input type="text" name="valor1"><br></label>
				<label>Valor 2 <br><input type="text" name="valor2"><br><br></label>
				<label>
					<input type="submit" name="sel" value="Somar">
					<input type="submit" name="sel" value="Subtrair">
					<input type="submit" name="sel" value="Multiplicar">
					<input type="submit" name="sel" value="Dividir">
				</label>
			</fieldset>
		</form>
		</div>
		
		<div>
			<form  method="post">
				<fieldset id="exerc">
					<legend>Par ou Impar?</legend>
					<label>Valor<br><input type="text" name="valor"><br></label>
					<label><input type="submit" name="sel" value="ok"></label>
				</fieldset>
			</form>
		</div>
		
		<div id="exerc">
			<?php
				if($_POST){
					if($_POST["sel"] != "ok"){
						$valor1 = $_POST["valor1"];
						$valor2 = $_POST["valor2"];
						
						if($_POST["sel"] == "Somar"){
							echo "Resultado da Soma:".($valor1+$valor2);
						}
						if($_POST["sel"] == "Multiplicar"){
							echo "Resultado da multiplicação:".($valor1*$valor2);
						}
						if($_POST["sel"] == "Subtrair"){
							echo "Resultado da Subtração:".($valor1-$valor2);
						}
						if($_POST["sel"] == "Dividir"){
							echo "Resultado da Divisao:".($valor1/$valor2);
						}
					}		
					if($_POST["sel"] == "ok"){
						if(($_POST["valor"] % 2) == 0){
							echo " O numero ".$_POST['valor']." é par";
						}else{
							echo " O numero ".$_POST['valor']." é impar";
						}
					}
					if ($_POST["sel"] == "Calcular"){
						$valor1 = $_POST["valor1"];
						$valor2 = $_POST["valor2"];
						$valor3 = $_POST["valor3"];
						$valor4 = $_POST["valor4"];
						if($_POST["sel"] == "Calcular"){
						echo "A Média é:".(($valor1+$valor2+$valor3+$valor4)/4);
						}
					}
				}
			?>
		</div>	
	</div>
	</body>
</html>