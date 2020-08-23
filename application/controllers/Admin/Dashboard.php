<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		checkOnLogin();
	}

	public function index()
	{
		$data['page'] = 'v_admin/v_a_content/v_cont_dashboard';
		$data['header'] = 'Dashboard';
		$this->load->view("v_admin/v_a_template/v_temp_main", $data);
	}
}
