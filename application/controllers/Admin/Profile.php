<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		checkOnLogin();
        $this->load->model(['ModelProfile']);
	}
	
	public function index()
	{
		$dataProfile = $this->ModelProfile->getAll();
		$data = array(
			"page" => "v_admin/v_a_content/v_cont_profile",
			"header" => "Profile",
			"data" => $dataProfile
		);
		$this->load->view("v_admin/v_a_template/v_temp_main", $data);
	}

	public function proses_simpan(){
        $pegawai = array(
            "nama_pegawai" => $this->input->post('nama'),
            "alamat_pegawai" => $this->input->post('alamat'),
            "jenis_kelamin" => $this->input->post('jk'),
            "jabatan" => $this->input->post('jbtn'),
            "no_telp" => $this->input->post('nomer')
        );
        $this->ModelProfile->insert($pegawai);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Sukses disimpan');
        }
        redirect('Pegawai/register');
    }


}
