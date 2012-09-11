<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
	<?php 
		class Carro{
			private $modelo,$marca,$placa,$ano;
			
			public function acelerar(){
				echo "Acelerando";
			}
			public function freiar(){
				echo "Freiando";
			}
			public function getModelo(){
				return $this->modelo;
			}
			public function setModelo($modelo){
				$this->modelo=$modelo;
			}
			public function getMarca(){
				return $this->marca;
			}
			public function setMarca($marca){
				$this->marca = $marca;
			}
			public function getPlaca(){
				return $this->placa;
			}
			public function setPlaca($placa){
				$this->placa = $placa;
			}		
			public function getAno(){
				return $this->ano;
			}
			public function setAno($ano){
				$this->ano = $ano;
			}		
		}
	?>

</body>
</html>