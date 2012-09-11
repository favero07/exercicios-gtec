<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
	<?php
		class Mamifero extends Animal {
			private $genero, $alimentacao;	
			
			public function amamenta(){
				echo "Amamentando";	
			}
			public function getGenero(){
				return $this->genero;
			}
			public function setGenero($genero){
				$this->genero = $genero;	
			}
			public function getAlimentacao(){
				return $this->alimentacao;	
			}
			public function setAlimentacao($alimentacao){
				$this->alimentacao = $alimentacao;	
			}
		}
	?>	
</body>
</html>