<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategorySkill extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		checkOnLogin();
        $this->load->model('ModelKategoriSkill');
	}
	
	public function index()
	{
		$dataKategoriSkill = $this->ModelKategoriSkill->getAll();
		$data = array(
			"page" => "v_admin/v_a_content/v_cont_category_skill",
			"header" => "Category Skill",
			"data" => $dataKategoriSkill
		);
		$this->load->view("v_admin/v_a_template/v_temp_main", $data);
	}
	
	public function proses_simpan(){
        $data = $this->input->post(null, true);
        $this->ModelKategoriSkill->insert($data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Sukses disimpan');
        }
        redirect('Admin/CategorySkill');
	}
	
	public function proses_edit()
    {
        $id = $this->input->post("id_category_Skill_project", true);
        $nama = $this->input->post("nama_category_Skill_project", true);
        $desk = $this->input->post("desk_category_Skill_project", true);
        $kategori = array(
            "nama_category_Skill_project" => $nama,
            "desk_category_Skill_project" => $desk,
        );
        $this->ModelKategoriSkill->update($id, $kategori);
        if($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Sukses diupdate');
        }
        redirect("Admin/CategorySkill");
	}
	
	public function proses_hapus($id)
    {
        $this->ModelKategoriSkill->delete($id);
        redirect("Admin/CategorySkill");
    }
}
