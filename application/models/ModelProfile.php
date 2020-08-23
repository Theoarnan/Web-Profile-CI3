<?php

class ModelProfile extends CI_Model{
	var $table = "profile";
	var $primaryKey = "id_profile";

	public function getAll(){
		return $this->db->get($this->table)->result();
	}

	public function insert($data){
		return $this->db->insert($this->table, $data);
	}

	public function getByPrimaryKey($id){
		$this->db->where($this->primaryKey, $id);
		return $this->db->get($this->table)->row();
	}

	public function update($id, $data){
		$this->db->where($this->primaryKey, $id);
		return $this->db->update($this->table, $data);
	}

	public function delete($id){
		$this->db->where($this->primaryKey, $id);
		return $this->db->delete($this->table);
	}
}
