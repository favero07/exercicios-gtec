<?php
echo "| TRIM( ) |";
echo "<p>string trim ( string $str [, string $charlist ] )<br>
Esta função retorna uma string com os espaçoes retirados do ínicio e do final de str. Sem o segundo parâmetro, trim() irá retirar estes caracteres</p>";

$text = "\t.matte";
$binary = "jac";
$hello  = "Hello World";
var_dump($text, $binary, $hello);

print "\n";

$trimmed = trim($text);
var_dump($trimmed);

$trimmed = trim($text, " \t.");
var_dump($trimmed);

$trimmed = trim($hello, "Ho");
var_dump($trimmed);

echo "<p>| SUBSTR( ) |</p>";

echo "<p>O substr é responsável por retornar um pedaço da string. Para isto ele se utiliza de três parâmetros: a própria string, o índice inicial e a quantidade de caracteres a ser retornada.

Acontece que podemos utilizar também um índice negativo, desta forma o PHP analisa a string contando N caracteres a partir do final, e não a partir do inicio</p>";


$texto = "eu não sou besta pra tirar onda de herói";

echo substr($texto, 0, 16);  
echo "<br>";
echo substr($texto, 11);    
echo "<br>";
echo substr($texto, 11, 9);
echo "<br>";
echo substr($texto, -5);
echo "<br>";

echo "<p>| STRTOUPPER( ) |</p>";

echo "<p>Básicamente poderemos conveter toda a string em minúsculas/caixa-baixa, utilizando o strtoupper().</p>";

echo "<p>EU QUERO MINHA FRASE EM MINUSCULA VIA PHP</p>";
$texto = 'EU QUERO MINHA FRASE EM MINUSCULA VIA PHP';
echo strtolower($texto);
?> 