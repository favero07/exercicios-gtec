<?php 
	
	class Carro{

		private $modelo;
		private $marca;
		private $placa;
		private $ano;



		public function acelerar(){
			echo "Voce esta acelerando!";
		}

		public function freiar(){
			echo "Voce esta freiando!";
		}


		//encapsulamento
		public function getModelo(){
			return $this->modelo;
		}
		
		public function getMarca(){
			return $this->marca;
		}

		public function getPlaca(){
			return $this->placa;
		}

		public function getAno(){
			return $this->ano;
		}
	

		//funcoes de entrada de valores
		public function setModelo($novoModelo){
			return $this->modelo =$novoModelo;
		}
		
		public function setMarca($novaMarca){
			return $this->marca =$novaMarca;
		}

		public function setPlaca($novaPlaca){
			return $this->placa =$novaPlaca;
		}

		public function setAno($novoAno){
			return $this->ano =$novoAno;
		}

	}



 ?>