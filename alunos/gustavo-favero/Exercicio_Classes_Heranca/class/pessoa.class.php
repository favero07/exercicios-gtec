<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
	<?php
		class Pessoa extends Mamifero {
			private $rg, $computador, $carro, $dataNasc;	
			
			public function calcIdade(){
				echo "calc";	
			}
			public function getRg(){
				return $this->rg;
			}
			public function setRg($rg){
				$this->rg = $rg;	
			}
			public function getComputador(){
				return $this->computador;	
			}
			public function setComputador($computador){
				$this->computador = $computador;	
			}
			public function getCarro(){
				return $this->carro;	
			}
			public function setCarro($carro){
				$this->carro = $carro;	
			}
			public function getDataNasc(){
				return $this->dataNasc;	
			}
			public function setDataNasc($dataNasc){
				$this->dataNasc = $dataNasc;	
			}			
		}
	?>	
</body>
</html>