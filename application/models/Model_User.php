<?php
class Model_User extends CI_Model
{
	var $table = "administrator";
	var $primaryKey = "id_user";
	var $username = "username";
	var $password = "password";

	public function login($post)
	{
		$this->db->select('*');
		$this->db->from('administrator');
		$this->db->where('username', $post['username']);
		$this->db->where('password', sha1($post['password']));
		$query = $this->db->get();
		return $query;
	}

	public function getByEmailAndPassword($username, $password)
	{
		$this->db->where('email', $username)->or_where('username', $username);
		$user = $this->db->get("administrator")->row();
		if (!$user) {
			return false;
		}
		$passwordUser = $user->password;
		if (!password_verify($password, $passwordUser)) {
			return false;
		}
		return $user;
	}

	public function getByToken($token)
	{
		$this->db->where("token", $token);
		return $this->db->get("user")->row();
	}

	public function insert($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function getAll()
	{
		return $this->db->get($this->table)->result();
	}

	public function getByPrimaryKey($id)
	{
		$this->db->where($this->primaryKey, $id);
		return $this->db->get($this->table)->row();
	}

	public function update($id, $data)
	{
		$this->db->where($this->primaryKey, $id);
		return $this->db->update($this->table, $data);
	}

	public function delete($id)
	{
		$this->db->where($this->primaryKey, $id);
		return $this->db->delete($this->table);
	}
}
