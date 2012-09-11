<!doctype html>

<html>
<head>
<title>Exercicio 5</title>
</head>
<body>

<h1>Exercicio 5</h1>
<?php

$computador["processador"] = "Pentium 500";
$computador["memoria"] = 256;
$computador["placa-video"] = false;
$computador["HD"]= "Samsung 500 gb";
$computador["monitor"]= "Samsung 22''";
$computador["placa-som"]= "Creative SoundBlaster 5.1 Suround";

$computador2["processador"] = "Atlon 2000 XP";
$computador2["memoria"] = 512;
$computador2["placa-video"] = "ATI RADEON 32 MB";
$computador2["HD"]= "Quantum 50 gb";
$computador2["monitor"]= "Samsung 15''";
$computador2["placa-som"]= false;


$computadores[]=$computador;
$computadores[]=$computador2;
$computadores[]=$computador;
$computadores[]=$computador2;
for ($i=0; $i <count($computadores) ; $i++) { 
	
	echo "<ul>";

	foreach ($computadores[$i] as $key => $value) {
		echo "<li>" . "Indice: $key //// Valor: $value " . "</li>"  ;
	}
	echo "</ul>";
}



?>
</body>
</html>