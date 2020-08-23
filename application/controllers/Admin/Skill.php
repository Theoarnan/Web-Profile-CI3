<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skill extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		checkOnLogin();
        $this->load->model(array('ModelSkill', 'ModelKategoriSkill'));

	}

	public function index()
	{
		$dataSkill = $this->ModelSkill->getAll();
		$dataCategorySkill = $this->ModelKategoriSkill->getAll();
		$data = array(
			"page" => "v_admin/v_a_content/v_cont_skill",
			"header" => "Skill",
			"data" => $dataSkill,
			"datakategori" => $dataCategorySkill
		);
		$this->load->view("v_admin/v_a_template/v_temp_main", $data);
	}

	public function proses_simpan(){
        $data = $this->input->post(null, true);
        $this->ModelSkill->insert($data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Sukses disimpan');
        }
        redirect('Admin/Skill');
	}
	
	public function proses_edit()
    {
        $id = $this->input->post("id_skill_project", true);
        $nama = $this->input->post("nama_skill_project", true);
        $desk = $this->input->post("deskripsi_skill_project", true);
        $presentase = $this->input->post("presentase_skill_project", true);
        $kategoriskillId = $this->input->post("category_Skill_project_id", true);
        $skill = array(
            "id_skill_project" => $nama,
            "nama_skill_project" => $desk,
            "deskripsi_skill_project" => $presentase,
            "presentase_skill_project" => $kategoriskillId,
        );
        $this->ModelSkill->update($id, $skill);
        if($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Sukses diupdate');
        }
        redirect("Admin/Skill");
	}
	
	public function proses_hapus($id)
    {
        $this->ModelSkill->delete($id);
        redirect("Admin/Skill");
    }
}
