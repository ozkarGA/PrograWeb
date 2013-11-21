<?php

class Conexion{

	function Conexion(){
		$this->db = ADONewConnection('mysql');
		$this->db->debug = true;
		// host,  usuario, password, bd
		$this->db->Connect('localhost','root','','clase');
	}

}


?>