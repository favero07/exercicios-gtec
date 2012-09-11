<html>
	<head>
		<title>Login</title>
		<style type="text/css">
			fieldset{
				margin: 0 auto;
				width: 300px;
			}
		</style>
	</head>
	<body>
		<form action = "login.php" method="POST">
			<fieldset>
				<legend>Login</legend>
				Nome: <input type = "text" name = "nome"><br/><br/>
				
				Senha: <input type = "password" name = "senha"><br/><br/>

				<input type = "checkbox" id = "lembrar" name = "lembrar">
				<label for = "lembrar">
					Lembrar meu ID e senha
				</label><br/><br/>
					
				<input type = "submit" value = "Login">
			</fieldset>

		</form>
	</body>
</html>