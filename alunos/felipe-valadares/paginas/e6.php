<html>
	<head>
		<link rel="stylesheet" href="../estilo.css" type="text/css"  />
	</head>
	
	<body>
		<h2>Exercicio 5</h2>
		
		<div style="float:left;">
		<form  method="post">
			<fieldset id="exerc">
				<legend><b>Conversor</b></legend>
				
				<label>Converter uma <b>STRING</b> em <b>ARRAY</b>,e uma <b>ARRAY</b> em <b>STRING</b>.<br><br>Digite strings separadas por ","<br><input type="text"name="sttoar">
				</label>
				<label><input type="submit" name="sel" value="converter"></label><br><br>
				
				<label>Converter uma <b>STRING</b> em <b>INTEGER</b>,e um <b>INTEGER</b> em <b>STRING</b>.<br><br> Digite o numero: 
				<br><input type="text"name="sttoar">
				</label>
				<label><input type="submit" name="sel1" value="converter."></label><br><br>
				
				<label>Converter um <b>INTEGER</b> em <b>FLOAT</b>,e um <b>FLOAT</b> em <b>STRING</b>.<br><br> Digite o numero: 
				<br><input type="text"name="sttoar">
				</label>
				<label><input type="submit" name="sel2" value="converter.."></label>
			</fieldset>
		</form>
		</div>
		<div id="exerc" >
			<?php
				// string para array
				if($_POST){
					if(!empty($_POST["sel"])){
						
						$string  = $_POST["sttoar"];
						echo " A variavel é do tipo: <b>".gettype($string)."</b><br>E tem o seguinte valor: <b>".$string."</b><br>";
						$array = explode(",", $string);
						echo " <br>Após a conversão:<br>";
						echo "<pre>";
						echo var_dump($array)."</pre>";
						echo "Agora fazendo a array voltar a ser string:<br>";
						$teste = implode(",",$array);
						echo " A variavel é do tipo: <b>".gettype($teste)."</b><br>E tem o seguinte valor: ";
						echo "<pre>";
						echo "<b>".var_dump($teste)."</b><br></pre>";
					}
					if(!empty($_POST["sel1"])){
						$string  = $_POST["sttoar"];
						echo " A variavel é do tipo: <b>".gettype($string)."</b><br>E tem o seguinte valor: <b>"."'".$string."'"."</b><br>";
						echo " <br>Agora convertido tem o seguinte tipo e valor:<br>";
						$var = (int) $string;
						echo "<pre>";
						echo var_dump($var)."</pre>";
						echo "<br>";
					}
					if(!empty($_POST["sel2"])){
						$string  = $_POST["sttoar"];
						$inteiro = (int) $string;
						echo " A variavel é do tipo: <b>".gettype($inteiro)."</b><br>E tem o seguinte valor: <b>"."'".$inteiro."'"."</b><br>";
						echo " <br>Agora convertido para float tem o seguinte tipo e valor:<br>";
						$float= (float) $inteiro;
						echo "<pre>";
						echo var_dump($float)."</pre>";
						echo "<br>";
						$string = (string) $float;
						echo " <br>Agora convertido para String tem o seguinte tipo e valor:<br>";
						echo "<pre>";
						echo var_dump($string)."</pre>";
						
					}
					
				}	
			?>
			
		</div>	
	</div>
	</body>
</html>