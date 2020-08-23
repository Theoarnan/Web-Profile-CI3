<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portofolio extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		checkOnLogin();
        $this->load->model(array('ModelPortofolio', 'ModelKategoriProject', 'ModelSkill'));
	}
	
	public function index()
	{
		$dataPortofolio = $this->ModelPortofolio->getAll();
		$dataSkill = $this->ModelSkill->getAll();
		$dataKategori = $this->ModelKategoriProject->getAll();
		$data =  array(
			"page" => "v_admin/v_a_content/v_cont_portofolio",
			"header" => "Portofolio",
			"data" => $dataPortofolio,
			"dataskill" => $dataSkill,
			"dataKategori" => $dataKategori
		);
		$this->load->view("v_admin/v_a_template/v_temp_main", $data);
	}

	public function proses_simpan(){
		$data = array(
			"nama_project" => $this->input->post("nama_project", true),
			"sub_desk_project" => $this->input->post("sub_desk_project", true),
			"deskripsi_project" => $this->input->post("deskripsi_project", true),
			"deadline_project" => $this->input->post("deadline_project", true),
			"client_project" => $this->input->post("client_project", true),
			"client_review" => $this->input->post("client_review", true),
			"demo_project" => $this->input->post("demo_project", true),
			"skill_project_id" => $this->input->post("skill_project_id", true),
			"category_project_id" => $this->input->post("category_project_id", true),
		);
		$this->input->post(null, true);
        $this->ModelPortofolio->insert($data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Sukses disimpan');
        }
        redirect('Admin/Portofolio');
    }
}
