<?php
	class Calculadora{

		public $valor1;
		public $valor2;
		public $res = '0';

		public function calcula(){
			if(preg_match('/^([0-9]+)(\/|\*|\+|\-)([0-9]+)+$/',$this->valor1,$match )){

				switch ($match[2]) {
					case '+':
						$this->res = $match[1] + $match[3];
						break;
					case '-':
						$this->res = $match[1] - $match[3];
						break;
					case '*':
						$this->res = $match[1] * $match[3];
						break;
					case '/':
						$this->res = $match[1] / $match[3];
						break;	
					default:
						$this->res = "Error:";
						break;
				}

			}

		}

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