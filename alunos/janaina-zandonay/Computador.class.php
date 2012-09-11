<?php
	class Computador{
		private $porcessador;
		private $memoria;
		private $hardDisk;
		private $placaVideo;
		
		public function ligar(){
			echo ("Computador está ligado");
		}
		public function desligar(){
			echo ("Computador esta desligado");
		}
		public function getProcessador(){
			return $this->processador;
		}
		public function setProcessador($novoProcessador){
			$this->processador = $novoProcessador;
		}
		public function getMemoria(){
			return $this->memoria;
		}
		public function setMemoria($novaMemoria){
			$this->memoria = $novaMemoria;
		}
		public function getHardDisk(){
			return $this->hardDisk;
		}
		public function setHardDisk($novoHardDisk){
			$this->hardDisk = $novoHardDisk;
		}
		public function getPlacaVideo(){
			return $this->placaVideo;
		}
		public function setPlacaVideo($novaPlacaVideo){
			$this->placaVideo = $novaPlacaVideo;
		}
	}
?>