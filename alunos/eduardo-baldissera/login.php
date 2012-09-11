<html>
	<head>
		<title>Exercicio 10</title>
		     <script type="text/javascript">
             function mostrar()
{
	                     var usuario;
                         var senha;
				usurario = 
document.getElementById("usuario").value;
				senha =
document.getElementById("senha").value;

                alert("Usúario:" usuario,"Senha:" senha);
				
}
     </script>
	</head>
	<body>
	 <h1>Exercicio 10</h1>
	 <hr/>

<p>    Usuário:<input type="text" id="usuario"/> </p>
<p>    Senha:<input type="password" id="senha"/>   </p>
    <input type="checkbox" id="check"/>
    <label for="check">
    Manter senha salva
    </label>       <br/>
		 <?php
	 	$login[“usuario”]; 
		$login[“senha”];
		?>
    <input onclick="mostrar();"
	type="button" id="logar" value="Logar"/>

		 </body>
</html>

