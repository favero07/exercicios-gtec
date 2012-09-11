
<?php  
	class Carro{
		private $placa;
		private $modelo;
		private $ano;

		//serviços operacoes

		public function acelerar(){
			echo "Esta acelerando";
		}

		public function freiar(){
			echo "Esta freiando";
		}

		//encapsulamento

		public function getplaca(){
			return $this->placa;
		}

		public function setplaca($novaplaca){
			$this->placa = $novaplaca;
		}
	}

?>