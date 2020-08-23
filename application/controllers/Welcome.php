<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['page'] = 'v_admin/v_a_content/v_cont_dashboard';
		$data['header'] = 'Dashboard';
		$this->load->view("v_admin/v_a_template/v_temp_main", $data);
	}
}
