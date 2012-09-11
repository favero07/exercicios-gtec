<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
	<?php
		class Animal {
			private $sexo, $especie;	
			
			public function comer(){
				echo "Comendo";	
			}
			public function dormir(){
				echo "Dormindo";	
			}
			public function getSexo(){
				return $this->sexo;
			}
			public function setSexo($sexo){
				$this->sexo = $sexo;	
			}
			public function getEspecie(){
				return $this->especie;	
			}
			public function setEspecie($especie){
				$this->especie = $especie;	
			}
		}
	?>	
</body>
</html>