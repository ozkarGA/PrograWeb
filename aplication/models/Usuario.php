<?php
	class Usuario extends Modelo{
		public $nombre_tabla = "pw_usuarios";
		public $pk = "id_usuario";

		public $atributos = array(
					'nombre'=>array(),
					'apellidos'=>array(),
					'email'=>array(),
					'password'=>array(),
		);

		private $nombre;
		private $apellidos;
		private $email;
		private $password;

		function Usuario(){
			parent::Modelo();
		}

		public function get_rs(){
			$rs = array();
			foreach($this->atributos as $key => $value){
				$rs[$key]=$this->$key;
			}
			return $rs;
		}
			
		public function set_nombre($valor){
			$this->nombre = $valor;
		}
		public function get_nombre(){
			return $this->nombre;
		}

		
		public function set_apellidos($valor){
			$this->apellidos = $valor;
		}
		public function get_apellidos(){
			return $this->apellidos;
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