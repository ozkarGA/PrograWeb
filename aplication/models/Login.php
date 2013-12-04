<?php
	class Login extends Modelo{

		public $nombre_tabla = "pw_usuarios";
		
		public $atributos = array(
				'email'=>array(),
				'password'=>array(),
		);
		
		private $email;
		private $password;

		public function login(){
			$rs = $this->consulta_by_sql(' where email = '.$this->email);
			if(count($rs) == 0){

			}else{
				if( $rs['password'] == md5($this->password)){
					
				}
			}
		}


		public function set_email($valor){
			$this->email = $valor;
		}
		public function get_email(){
			return $this->email;
		}


		public function set_password($valor){
			$this->password = md5($valor);
		}
		public function get_password(){
			return $this->password;
		}


	}

?>	