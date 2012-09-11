<?php
	class Carro{
		private $modelo;
		private $marca;
		private $placa;
		private $ano;
		
		public function acelerar(){
			echo ("Esta acelerando");
		}
		public function freiar(){
			echo ("Esta freiando");
		}
		public function getPlaca(){
			return $this->placa;
		}
		public function setPlaca($novaPlaca){
			$this->placa = $novaPlaca;
		}
		public function getModelo(){
			return $this->modelo;
		}
		public function setModelo($novoModelo){
			$this->modelo = $novoModelo;
		}
		public function getMarca(){
			return $this->marca;
		}
		public function setMarca($novaMarca){
			$this->marca = $novaMarca;
		}
		public function getAno(){
			return $this->ano;
		}
		public function setAno($novoAno){
			$this->ano = $novoAno;
		}
				
	}
?>