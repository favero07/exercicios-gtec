<!doctype html>

<html>
<head>
<title>Exercicio 4</title>
</head>
<body>

<h1>Exercicio 4</h1>
<pre><?php

$churrasco = array("Carne","Pao","Carvao","Cerveja","Coca");

$churrasco[]= "Stripers";
$churrasco[]= "Cachaça";


echo $churrasco[0];
echo $churrasco[3];
echo $churrasco[2];

echo "<br>";
echo var_dump($churrasco);
?></pre>

</body>
</html>