<?php
function ecop ($texto){
	echo "<p>".$texto."</p>";	
	
}
function soma($n1,$n2){
	return $n1+$n2;
}
function sub($n1,$n2){
	return $n1-$n2;
}
function mult($n1,$n2){
	return $n1*$n2;
}
function div($n1,$n2){
	return $n1/$n2;
}
function mod($n1,$n2){
	return $n1%$n2;
}

function escolhe_function($n1,$n2,$op){
	switch($op){
		case "soma": ecop(soma($n1,$n2)); break;
		case "sub": ecop(sub($n1,$n2)); break;	
		case "mult": ecop(mult($n1,$n2)); break;
		case "div": ecop(div($n1,$n2)); break;
		case "mod": ecop(mod($n1,$n2)); break;
	}
}
?>
