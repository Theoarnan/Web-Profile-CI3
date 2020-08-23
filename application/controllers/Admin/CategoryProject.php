<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryProject extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		checkOnLogin();
        $this->load->model('ModelKategoriProject');
	}
	
	public function index()
	{
		$dataKategoriProject = $this->ModelKategoriProject->getAll();
		$data = array(
			"page" => "v_admin/v_a_content/v_cont_category_project",
			"header" => "Category Project",
			"data" => $dataKategoriProject
		);
		$this->load->view("v_admin/v_a_template/v_temp_main", $data);
	}

	public function proses_simpan(){
        $data = $this->input->post(null, true);
        $this->ModelKategoriProject->insert($data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Sukses disimpan');
        }
        redirect('Admin/CategoryProject');
	}
	
	public function proses_edit()
    {
        $id = $this->input->post("id_categori_project", true);
        $nama = $this->input->post("nama_category_project", true);
        $kategori = array(
            "nama_category_project" => $nama,
        );
        $this->ModelKategoriProject->update($id, $kategori);
        if($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Sukses diupdate');
        }
        redirect("Admin/CategoryProject");
	}
	
	public function proses_hapus($id)
    {
        $this->ModelKategoriProject->delete($id);
        redirect("Admin/CategoryProject");
    }
}
