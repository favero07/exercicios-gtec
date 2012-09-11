<html>
	<head>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>  
		<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.js"></script>  
		<script type="text/javascript">
		$(function(){
			$('ajax_formulario').submit(function(el){
				el.preventDefault();
				$.ajax({
					type:"POST",
					url:$(this).attr("action"),
					data: $(this).serialize()
					}).done(function(msg){
						$('.error').html(msg);
						});
			});
		});
		</script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#ajax_formulario').validate({
					rules:{
						nome:{
						required: true,
						minlength: 3
						},
						email: {
						required: true,
						email: true
						},
						ano: {
						required: true,
						minlength: 4
						},
						m1: {
							required: true
						},
					},
					messages:{
						nome:{
							required: "O campo nome é obrigatorio.",
							minlength: "O campo nome deve conter no mínimo 3 caracteres."
						},
						email: {
							required: "O campo email é obrigatorio.",
							email: "O campo email deve conter um email válido."
						},
						ano: {
							required: "O campo ano é obrigatorio.",
							minlength: "O campo ano deve conter 4 digitos."
						},
						m1: {
							required: "O campo musicas é obrigatorio.",
							m1: "O campo deve conter o nome de 3 musicas."
						}
					}
				});
			});
		</script>
	</head>
	<body>
		<div style="float:left;">
			<form method="post" id="ajax_formulario">
				<fieldset>
					<legend>Titulo</legend>
					<label>Nome da banda: <br><input type="text" name="nome"></label><br>
					<label>Email: <br><input type="text" name="email"></label><br>
					<label>Ano de Criacao: <br><input type="text" name="ano"></label><br>
					<label>Digite as Musicas separadas por ",": <br><input type="text" name="m1"></label><br>
					<label><input type="submit" value="ok"></label>
				</fieldset>
			</form>
		</div>
		<div id="exerc">
			<?php
				function validaEmail($email){
					if (preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',$email)){
						return true;
					}else{
						return false;
					}
				}
				if($_POST == true){
				
					$conta= strlen($_POST["ano"]); // verifica a qtd de caracteres do ano
					
					if(!empty($_POST["nome"]) && !empty($_POST["email"]) && !empty($_POST["ano"]) && !empty($_POST["m1"])){
						$nome= $_POST["nome"];
						$email= $_POST["email"];
						$ano= $_POST["ano"];
						$m= $_POST["m1"];
						$musica=explode(",",$m);
						
						if(validaEmail($_POST["email"]) == true && $conta == 4){
							echo "Nome da banda:";
							echo "<ul>"."<li>".$nome."</li>"."</ul>";
							echo " Email da bada:<br>";
							echo"<b>".$email."</b><br><br>";
							echo"Lista de musicas:<br>";
							echo "<ol>";
							for($i=0;$i<=(sizeof($musica)-1);$i++){
								echo "<li>".$musica[$i]."</li>";
							}
							echo "</ol>";
						}else{
							echo "Digite um e-mail valido e o ano com 4 digitos";
						}
						
					}else{
						echo "<h1>Todos os campos sao obrigatorios</h1><br>";
					}
				}	
			?>	
		</div>		
	</body>
</html>