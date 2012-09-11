<html>
	<head>
		<title>Formulario</title>
		<meta charset = "utf-8">
		<style type="text/css">
			body{
				background:MediumSlateBlue;
			}
			fieldset{
				width: 500px;
				margin: 0 auto;
				background: Gainsboro;
			}

			header{
				text-align: center;	
			}

			input,textarea{
				width: 100%;
				color:purple;
				font-size: 20;
			}
	
			footer{
				clear: both;
				text-align: center;
				width: 100%;
			}

		</style>
	</head>
	<body>
		<header><h1> Cadastro de Banda Sertaneja </h1></header>
		<article>
			<form action="exe11.php" method="POST">
			<fieldset>
				<legend>Cadastre sua banda!</legend>

					<label for = "dupla"> Nome da dupla: </label>
					<input type = "text" name = "dupla" id = "dupla" ;><br/><br/>
					
					<label for = "cantor1">Nome de um cantor: </label>
					<input type = "text" name = "cantor1" id = "cantor1"><br/><br/>
					
					<label for = "cantor2">Nome de outro cantor: </label>
					<input type = "text" name = "cantor2" id = "cantor2"><br/><br/>
					
					<label for = "email">Email: </label>
					<input type = "text" name = "email" id ="email"><br/><br/>
					
					<label for = "ano">Ano de publicaçao: </label>
					<input type = "text" name = "ano" id = "ano"><br/><br/>
					
					<label for = "musicas">Nome das 5 musicas mais top:</label>
					<br/>
					<textarea name = "musicas" id = "musicas" cols = "30" rows = "9"></textarea>
					
					<br/><br/>
					<input type="submit" value = "Enviar">

			</fieldset>
			</form>
		</article>	

		<footer>
			<hr/>
			<p>Cadastro de bandas - 2012</p>
		</footer>
	</body>
</html>