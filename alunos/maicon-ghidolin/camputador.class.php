<?php 
	
	class Computador{
		private $numeroserie;
		private $chaveproduto;

		public function ligar(){
			echo "Voce ligou o computador!";
		}

		public function desligar(){
			echo "Voce desligou o computador!";
		}

		//encapsulento

		public function getnumeroserie(){
			return $this->numeroserie;
		}

		public function getchaveproduto(){
			return $this->chaveproduto;
		}

		public function setnumeroserie($novonumero){
			$this->numeroserie = $novonumero;
		}

		public function setchave($novachave){
			$this->chaveproduto = $novachave;
		}

	}


 ?>