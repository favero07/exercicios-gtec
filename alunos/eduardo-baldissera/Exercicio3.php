<html>
<head>
	<title>Exercicio 3</title>
</head>

<body>
<h1> Pergunta </h1>
<?php

$resposta = D ;
switch ($resposta){
case "N":
	echo "Resposta é não";
	break;
case "S":
	echo "Resposta é sim";
	break;
default:
	echo "Resposta inválida";
}
?>

<hr/>
<h2> B </h2>
<?php
$pessoa1 = Maria;  + $sex1 = F;
$pessoa2 = Marcos; + $sex2 = M;
$pessoa3 = João;   + $sex3 = F;


if       ($sex1 && $sex2 == M){
echo "Maculino";
}else if ($sex2 && $sex3 == M){
echo "Maculino";
}else if ($sex3 && $sex1 == M){
echo "Maculino";
}else if ($sex1 && $sex2 == F){
echo "Feminino";
}else if ($sex2 && $sex3 == F){
echo "Feminino";
}else if ($sex3 && $sex1 == F){
echo "Feminino";
}
?>
</body>
</html>