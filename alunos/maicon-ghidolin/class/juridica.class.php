<?php 
	require_once "pessoa.class.php";
	class Juridica extends Pessoa{

		private $cpf;

		public function getCpf(){
			return $this->cpf;
		}

		public function setCpf($novoCpf){
			return $this->cpf =$novoCpf;
		}

	}


 ?>