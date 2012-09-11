<?php 
	require_once "mamifero.class.php";
	class Pessoa extends Mamifero{

		private $rg;
		private $dataNascimento;

		public function calculaIdade(){
			$data = date("Y");
			$date = $this->dataNascimento;
			$dateInfo = date_parse_from_format('d/m/Y', $date);
			$ano = $dateInfo['year'];
			$idade = $data - $ano;
			return $idade;
		}

		//encapsulamento

		public function getRg(){
			return $this->rg;
		}

		public function getDataNascimento(){
			return $this->dataNascimento;
		}

		//funcoes de entrada de valor

		public function setRg($novoRg){
			return $this->rg = $novoRg;
		}

		public function setDataNascimento($novaData){
			return $this->dataNascimento = $novaData;
		}
	}
 ?>