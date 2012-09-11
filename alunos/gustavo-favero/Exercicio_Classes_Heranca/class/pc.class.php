<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
	<?php 
		class Pc{
			private $processador,$memoria,$placavideo,$hd;
			
			public function ligar(){
				echo "Ligando";
			}
			public function desligar(){
				echo "Desligando";	
			}
			public function getProcessador(){
				return $this->processador;
			}
			public function setProcessador($processador){
				$this->processador = $processador;
			}
			public function getMemoria(){
				return $this->memoria;
			}
			public function setMemoria($memoria){
				$this->memoria = $memoria;
			}
			public function getPlacavideo(){
				return $this->placavideo;
			}
			public function setPlacavideo($placavideo){
				$this->placavideo = $placavideo;
			}		
			public function getHd(){
				return $this->hd;
			}
			public function setHd($hd){
				$this->hd = $hd;
			}
		}
	?>

</body>
</html>