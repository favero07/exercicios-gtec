<?php 
	require_once "pessoa.class.php";
	class Fisica extends Pessoa{

		private $cnpj;

		public function getCnpj(){
			return $this->cnpj;
		}

		public function setCnpj($novoCnpj){
			return $this->cnpj =$novoCnpj;
		}

	}


 ?>