<!DOCTYPE html>
<HTML>
      <HEAD>
		<link rel="stylesheet" href="../estilo.css" type="text/css"  />
		<?php require_once("../includes/functions.php"); ?>
      </HEAD>
      <BODY>
		<h2> Exercicio 04</h2>
		<div>
			<form  method="post">
				<fieldset id="exerc">
					<legend>Calculadora</legend>
					<label>Valor 1 <br><input type="text" name="a"><br></label>
					<label>Valor 2 <br><input type="text" name="b"><br><br></label>
					<label>
						<input type="submit" name="sel" value="Somar">
						<input type="submit" name="sel" value="Subtrair">
						<input type="submit" name="sel" value="Multiplicar">
						<input type="submit" name="sel" value="Dividir">
					</label>
				</fieldset>
			</form>
		</div>
		<div id="exerc">
			<?php
				if($_POST == true){
					$sel= $_POST["sel"];
					switch($sel){
						case "Somar":
							echo "O resultado é:".soma($_POST['a'],$_POST['b']);
							break;
						case "Subtrair":
							echo "O resultado é:".subtracao($_POST['a'],$_POST['b']);
							break;
						case "Multiplicar":
							echo "O resultado é:".multiplicacao($_POST['a'],$_POST['b']);
							break;
						case "Dividir":
							echo "O resultado é:".divisao($_POST['a'],$_POST['b']);
							break;
					}
				}
			?>
		</div>
      </BODY>
</HTML>