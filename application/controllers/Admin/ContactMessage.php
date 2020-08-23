<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactMessage extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		checkOnLogin();
	}
	
	public function index()
	{
		$data['page'] = 'v_admin/v_a_content/v_cont_contact_message';
		$data['header'] = 'Contact Message';
		$this->load->view("v_admin/v_a_template/v_temp_main", $data);
	}
}
