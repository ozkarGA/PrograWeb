<?php
	class Calculadora{

		public $valor1;
		public $valor2;

		public function suma(){
			return $this->valor1 +  $this->valor2;

		}

		public function setValor1($valor){
			$this->valor1 = $valor;
		}

		public function setValor2($valor){
			$this->valor2 = $valor;
		}

	}

?>