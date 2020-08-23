<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		checkOnLogin();
	}
	
	public function index()
	{
		$data['page'] = 'v_admin/v_a_content/v_cont_service';
		$data['header'] = 'Services';
		$this->load->view("v_admin/v_a_template/v_temp_main", $data);
	}
}
