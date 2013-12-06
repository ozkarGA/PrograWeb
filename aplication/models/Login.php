<?php
	class Login extends Modelo{

		public $nombre_tabla = "pw_usuarios";
		
		public $atributos = array(
				'email'=>array(),
				'password'=>array(),
		);
		
		private $email;
		private $password;

		public function valida(){
			$rs = $this->consulta_sql("select * from pw_usuarios where email = '".$this->email."'");
			$rs = $rs->GetArray();
			
			if(count($rs) == 0){
				return false;
			}else{
				if( trim($rs[0]['password']) == $this->password ){
					return true;
				}else{
					return false;
				}
			}
		}

		public function iniciar_sesion(){
			
			$_SESSION['session'] = true;
			$_SESSION['email'] = $this->email;
		}

		public function cerrar_session(){
			unset($_SESSION);
			session_destroy();
			return true;
		}
		


		public function set_email($valor){
			$this->email = $valor;
		}
		public function get_email(){
			return $this->email;
		}


		public function set_password($valor){
			$this->password = md5(trim($valor));
		}
		public function get_password(){
			return $this->password;
		}


	}

?>