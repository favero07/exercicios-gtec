<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Formulario</title>
	<style>
		h1{
			text-align:center;	
		}
		table{
			width:auto;
			margin: 0 auto;
			border-color:#666;
			border-radius:5;
			border-width:medium;
			border:#000;
		}
	</style>
</head>

<body>
	<h1>Formulário</h1>
	<form action="validaformulario.php" method="post">
    	<table>
        	<tr><td>Nome da Dupla:</td>
            	<td><input type="text" name="banda" /></td>
            </tr>
            <tr><td>Nome 1:</td>
            	<td><input type="text" name="nome1" /></td>
            </tr>
         	<tr><td>Nome 2:</td>
            	<td><input type="text" name="nome2" /></td>
            </tr>           
            <tr><td>Email:</td>
            	<td><input type="text" name="email" /></td>
            </tr>     
            <tr><td>Ano de criação:</td>
            	<td><input type="text" name="ano" maxlength="4" /></td>
            </tr>
            <tr><td>Músicas:</td></tr>    
            <tr><td colspan="2"><textarea name="musicas" rows="5" cols="28"></textarea></td></tr>             
        	<tr><td><input type="hidden" name="submetido" value="1">
            		<input type="submit" value="Enviar" />
           	</td></tr>
        </table>
    </form>

	<script src="http://aja.googleapis.com/ajax">
	<script>
		$(function(){
			$('form').submit(function(el){
				el.preventDefault();
				// alert("teste");
				
				console.log($(this).attr("action"));
				console.log($(this).serialize());
				$.ajax({
					type: "POST",
					url: $(this).attr("action"),
					data: $(this).serialize()
					
				})
</body>
</html>