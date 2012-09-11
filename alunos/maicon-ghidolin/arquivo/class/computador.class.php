<?php 
	
	class Computador{
		private $processador;
		private $memoria;
		private $hardDisk;
		private $placaVideo;

		public function ligar(){
			echo "Voce ligou o computador!";
		}

		public function desligar(){
			echo "Voce desligou o computador!";
		}

		//encapsulamento

		public function getProcessador(){
			return $this->processador;
		}

		public function getMemoria(){
			return $this->memoria;
		}

		public function getHardDisk(){
			return $this->hardDisk;
		}

		public function getPlacaVideo(){
			return $this->placaVideo;
		}


		//funçoes de entrada de valores

		public function setProcessador($novoProcessador){
			$this->processador = $novoProcessador;
		}

		public function setChave($novaMemoria){
			$this->memoria = $novaMemoria;
		}

		public function setHardDisk($novoHard){
			$this->hardDisk = $novoHard;
		}

		public function setPlacaVideo($novaPlaca){
			$this->placaVideo = $novaPlaca;
		}

	}


 ?>