<?php

class Conexion{

	function Conexion(){
		$this->db = ADONewConnection('mysql');
		$this->db->debug = false;
		// host,  usuario, password, bd
		$this->db->Connect('localhost','root','','clase');
	}

}


?>