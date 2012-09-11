
<html>
	<head>
		<link rel="stylesheet" href="../estilo.css" type="text/css"  />
	</head>
	
	<body>
		<h2>Exercicio 5</h2>
		
		<div>
		<form  method="post">
			<fieldset id="exerc">
				<legend>Lista de empresas de Software</legend>
				<label>Empresa 1 <br><input type="text" name="valor1"><br></label>
				<label>Empresa 2 <br><input type="text" name="valor2"><br><br></label>
				<label>Empresa 3 <br><input type="text" name="valor3"><br><br></label>
				<label>Empresa 4 <br><input type="text" name="valor4"><br><br></label>
				<label>Empresa 5 <br><input type="text" name="valor5"><br><br></label>
				<label><input type="submit" name="sel" value="ok"></label>
			</fieldset>
		</form>
		</div>
		<div style="float:right;">
		<form  method="post">
			<fieldset id="exerc">
				<legend>Lista para o churrasco</legend>
				<label>Digite os itens separados por " , " <br><input type="text" name="churrasco"><br></label>
				<label><input type="submit" name="sel" value="enviar"></label>
			</fieldset>
		</form>
		</div>
		
		<div style="float:left;">
		<form  method="post">
			<fieldset id="exerc">
				<legend>Informe a config. do seu Computador</legend>
				<label>Processador<br><input type="text" name="cpu"><br></label>
				<label>Memoria<br><input type="text" name="mem"><br></label>
				<label>HD<br><input type="text" name="hd"><br></label>
				<label>Placa De Video<br><input type="text" name="gpu"><br></label>
				<label>Sistema Operacional<br><input type="text" name="so"><br></label>
				<label><input type="submit" name="sel" value="Envie"></label>
			</fieldset>
		</form>
		</div>
		
		<div id="exerc" >
			<?php
				if($_POST){
					if($_POST["sel"] == "ok"){
					$i=0;
						$valor[0] = $_POST["valor1"];
						$valor[] = $_POST["valor2"];
						$valor[] = $_POST["valor3"];
						$valor[] = $_POST["valor4"];
						$valor[] = $_POST["valor5"];
						for($i=0;$i<=4;$i++){
							echo "Empresa ".$i.":".$valor[$i]."<br>";
						}
					}
					if($_POST["sel"] == "enviar"){
						$i=0;
						$list=$_POST["churrasco"];
						$lista=explode("," , $list);
						echo "<h3>Lista de compras pro churrasco</h3><ol>";
						while($i < sizeof($lista)){
							echo "<li>".$lista[$i];
							$i++;
							if($i == sizeof($lista)){
								echo "</li></ol>";
							}
						}
					}
					if($_POST["sel"] == "Envie"){
						$pc["processador"] = $_POST["cpu"];
						$pc["memoria"] = $_POST["mem"];
						$pc["hd"] = $_POST["hd"];
						$pc["placa de video"] = $_POST["gpu"];
						$pc["Sistema Operacional"] = $_POST["so"];
						echo "Função var_dump:<pre>";
						echo var_dump($pc)."</pre>";
						echo "Função print_r:<pre>";
						echo print_r($pc)."</pre>";
					}
				}
			?>
		</div>	
	</div>
	</body>
</html>