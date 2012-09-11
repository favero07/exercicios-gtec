<?php
	class Pc{
		private $processador;
		private $memoria;
		private $hd;
		private $plcVideo;
		
		//serviçoes/operaçoes
		public function ligar(){
				echo "ligando..";
		}
		
		public function desligar(){
			echo "desligando...";
		}
		
		//encapsulamento
		public function getProcessador(){
			return $this->processador;	
		}
		
		public function getMemoria(){
			return $this->memoria;	
		}
		
		public function getHd(){
			return $this->hd;	
		}
		
		public function getPlcVideo(){
			return $this->plcVideo;	
		}
		
		public function setProcessador($novoProcessador){
			$this->processador = $novoProcessador;	
		}
		
		public function setMemoria($novaMomeria){
			$this->memoria = $novaMomeria;	
		}
		
		public function setHd($novoHd){
			$this->hd = $novoHd;	
		}
		
		public function setPlcVideo($novaPlcVideo){
			$this->plcVideo = $novaPlcVideo;	
		}
		
	}





?>