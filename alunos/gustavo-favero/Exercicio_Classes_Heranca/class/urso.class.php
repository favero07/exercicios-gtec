<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
	<?php
		class Urso extends Mamifero {
			private $corpelo, $peso;	
			
			public function hibernar(){
				echo "Hibernando";	
			}
			public function getCorpelo(){
				return $this->corpelo;
			}
			public function setSexo($corpelo){
				$this->corpelo = $corpelo;	
			}
			public function getPeso(){
				return $this->peso;	
			}
			public function setPeso($peso){
				$this->peso = $peso;	
			}
		}
	?>	
</body>
</html>