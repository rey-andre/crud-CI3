<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImportModel extends CI_Model {

	public function insert($data){
		$insert = $this->db->insert_batch('kasus_covid', $data);
		if($insert){
			return true;
		}
	}
	public function getData(){
		$this->db->select('*');
		return $this->db->get('kasus_covid')->result_array();
	}

}
