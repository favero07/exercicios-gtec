<?php
$int=1;
$float=5.5;
$string="Fabricio Morais Antunes";
$array= array(
	"vet"=>"net",
);
if(gettype($string)=="string"){
	$aux=$string;
	$string=$int;
	echo "<p>Converta uma STRING em INTEGER: ".$string."</p>";
}

if(gettype($int)=="integer"){
	$int=$aux;
	echo "<p>Converta uma INTEGER em STRING: ".$int."</p>";
}


if(gettype($int)=="string"){
	$aux=$int;
	$int=$array;
	echo "<p>Converta uma STRING em ARRAY: ".$int["vet"]."</p>";
}

if(gettype($int)=="array"){
	$int=$aux;
	echo "<p>Converta um ARRAY em STRING: ".$int."</p>";
}

if(gettype($string)=="integer"){
	$string=$float;
	echo "<p>Converta um INTEGER em FLOAT: ".$string."</p>";
}

if(gettype($float)=="double"){
	$aux="R$ 23,45";
	$float=$aux;
	echo "<p>Converta um FLOAT em STRING, mostrando o resultado: ".$float."</p>";
}
?>