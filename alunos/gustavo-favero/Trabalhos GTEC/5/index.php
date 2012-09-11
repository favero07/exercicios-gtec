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
	<h1>Média</h1>
	<form action="resultado.php" method="post">
        <br />Nota 1:
        <input type="text" name="n1" />
        <br />Nota 2:
        <input type="text" name="n2" />
        <br />Nota 3:
        <input type="text" name="n3" />
        <br />Nota 4:
        <input type="text" name="n4" />
        <br /><input type="submit" value="Média" />
    </form>
</body>
</html>