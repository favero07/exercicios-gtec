<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Formulario</title>
	<style>
		h1{
			text-align:center;	
		}
	</style>
</head>

<body>
	<h1>Formulário</h1>
	<form action="resultado.php" method="post">
    	<table>
        	<tr><td>Nome:</td>
            	<td><input type="text" name="nome1" /></td>
                <td>Sexo:</td>
            	<td><select id="sexo1" name="sexo1">
    					<option>Masculino</option>
        				<option>Feminino</option>
    				</select></td>
            </tr>
            <tr><td>Nome:</td>
            	<td><input type="text" name="nome2" /></td>
                <td>Sexo:</td>
            	<td><select id="sexo2" name="sexo2">
    					<option>Masculino</option>
        				<option>Feminino</option>
    				</select></td>
            </tr>
         	<tr><td>Nome:</td>
            	<td><input type="text" name="nome3" /></td>
                <td>Sexo:</td>
            	<td><select id="sexo3" name="sexo3">
    					<option>Masculino</option>
        				<option>Feminino</option>
    				</select></td>
            </tr>           
        	<tr><td><input type="submit" value="Enviar" />
    		</td></tr>
        </table>
    </form>
</body>
</html>