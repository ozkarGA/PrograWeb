<?php

class Modelo extends Conexion{

	public $db;
	function Modelo(){
		parent::Conexion();
	}

	public function consulta_sql($sql){
		$rs = $this->db->Execute($sql);
		return $rs->GetArray();
    }

	public function consulta_datos(){
		$rs = $this->db->Execute("SELECT * FROM ".$this->nombre_tabla);
		return $rs;
	}

	public function inserta($rs){
		$sql_insert = $this->db->GetInsertSQL($this->nombre_tabla,$rs);
		return $this->get_error($this->db->Execute($sql_insert),'Error sql');
	}

	public function show_table($sql){
		$grid = new ADODB_Pager($this->db,$sql);
		$grid->Render('10');
	}
	
	public function get_error($result,$tipo_error){
		
		if($result === false){
			echo $tipo_error;
			return false;
		}else{
			return true;
		}
	}


}

?>