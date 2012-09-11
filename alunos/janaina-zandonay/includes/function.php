<?php

	function soma($a, $b){
		return $a + $b;
	}
	function subtracao($a, $b){
		return $a - $b;
	}
	function multiplicacao($a, $b){
		return $a * $b;
	}
	function divisao($a, $b){
		return $s / $b;
	}
	function modeulo($a, $b){
		$a % $b;
	}
	function calcula($a, $b, $op = "soma"){
		switch($op){
			case "soma":
				return soma($a, $b);
			break;
			case "subtracao":
				return subtracao($a, $b);
			break;
			case "multiplicacao":
				return multiplicacao($a, $b);
			break;
			case "divisao":
				return divisao($a, $b);
			break;
			case "modulo":
				return modulo($a, $b);
			break;
			
		}
	}

?>