<?php
		$erro = 0;
		$valida_ano = "^[0-9]{2,4}$";	
		$valida_banda = "^[a-záéíóúãõâêîôûçàèìòùA-ZÁÉÍÓÚÃÕÂÊÎÔÛÇÀÈÌÒÙ\s]{2,}$";
		$valida_cantor = "^[a-záéíóúãõâêîôûçàèìòùA-ZÁÉÍÓÚÃÕÂÊÎÔÛÇÀÈÌÒÙ\s]{2,}$";
		$valida_mail = "^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+@{1}[a-zA-Z0-9_.-]*\\.+[a-z]{2,4}$";
	
		if (isset($_POST) && !empty($_POST)) {
			if (empty($_POST["banda"])){
				  	echo "Nome da Banda não preenchido!\n";
					$erro=1;
			}else if (@preg_match($valida_banda,$_POST["banda"])){
				  	echo "Nome da Banda inválido!\n"; 
					$erro=1;
			}
			
			if (empty($_POST["cantor1"])){
				echo "Nome do cantor 1 não preenchido!\n";
				$erro=1;
			}else if (@preg_match($_POST["cantor1"],$valida_cantor)){
				echo "Nome do cantor 1 inválidoo!\n";
				$erro=1;
			}
	
			if (empty($_POST["cantor2"])){
				echo "Nome do cantor 2 não preenchido!\n";
				$erro=1;
			}else if (@preg_match($_POST["cantor2"],$valida_cantor)){
				echo "Nome do cantor inválido!\n";
				$erro=1;
			}
									  
			if (empty($_POST["mail"])){
				echo "Email não preenchido!\n";
				$erro=1;
			}else if(@preg_match($_POST["mail"],$valida_mail)){
				echo "Email inválido!\n";
				$erro=1;
			}
										  
			if (empty($_POST["ano"])){
				echo "Ano não preenchido!\n";
				$erro=1;
			}else if (@preg_match($_POST["ano"],$valida_ano)){
				echo "Ano inválido!\n";
				$erro=1;
			}
										  
			if (empty($_POST["musics"])){
				echo "Campo músicas não preenchido!\n";
				$erro=1;
			}
		
			if ($erro==0) {
 		       $banda = $_POST["banda"];
			   $cantor1 = $_POST["cantor1"];
			   $cantor2 =  $_POST["cantor2"];
			   $mail = $_POST["mail"];
			   $ano = $_POST["ano"];
			   $musicas = explode (",", $_POST["musics"]);
			 }
		}else{
				 echo "Cadastre-se antes!"; 
		}
		
	?>
           
<!DOCTYPE html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>ativ8_1</title>
    </head>
    <body> 
        <?php
			if ($erro == 0){
					echo "<table border='2px' cellpadding='2' cellspacing='0'>";
						echo "<tr>";
							echo "<td>";
									echo "Banda:";
							  echo "</td>";
							  echo "<td align='center'>";
									echo $banda;
							   echo "</td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>";
									echo "Cantores: ";
							echo "</td>";
							echo "<td align='center'>";
									echo $cantor1.", ". $cantor2;
							 echo "</td>";
						echo "</tr>";
						echo "<tr>";
						    echo "<td>";
								  echo "Email:"; 
							echo "</td>";
							echo " <td align='center'>";
							      echo $mail;
							echo "</td>";
					  echo "</tr>";
					  echo "<tr>";
							echo "<td>";
									echo "Lista de Músicas:";
							 echo "</td>";
							echo "<td>";
								  echo " <ul>";
										for ($i=0;$i<count($musicas);$i++){ 
											echo "<li>".$musicas[$i]."</li> ";
											}
								   echo "</ul>";
							echo "</td>";
					  echo "</tr>";
			  echo "</table>";
             }
         ?>
         <footer>
                <form>
                    <input type="button" value="Voltar" onClick="history.go(-1);">
                </form>
		</footer>
	</body>
</html>