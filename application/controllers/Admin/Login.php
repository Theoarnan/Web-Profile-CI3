<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("Model_User");
	}
	
	public function index()
	{
		$data['page'] = 'v_admin/v_a_content/v_cont_login';
		$data['header'] = 'ProfileApps';
		$this->load->view("v_admin/v_a_template/v_temp_login", $data);
	}

	// Proses Login
	public function proses_login()
    {
        $username =  $this->input->post("username", TRUE);
        $password =  $this->input->post("password", TRUE);
        $user = $this->Model_User->getByEmailAndPassword($username, $password);
        if ($user == null) {
            $this->session->set_flashdata('error', 'Username atau Email dan Password anda tidak ditemukan!');
            redirect("Admin/Login");
        } else {
            // Apa yang mau dikirimkan melalui session
            $dataSession = array(
                "idUser" => $user->id_user,
                "username" => $user->username,
				"email" => $user->email,
				"token" => $user->token,
                "is_logged_in" => true
            );
            $this->session->set_userdata($dataSession);
            $this->session->set_flashdata('success', 'Selamat datang di ProfileApps  ' . $user->username);
            redirect("Admin/Dashboard");
        }
	}
	
	// Proses Logout
	public function proses_logout()
    {
        $this->session->sess_destroy();
        redirect('Admin/Login');
    }
}
