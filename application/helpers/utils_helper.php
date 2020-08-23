<?php

// Konversi JK
function getJenisKelaminLengkap($jk)
{
	return ($jk == "L") ? "Laki-Laki" : "Perempuan";
}

// Send Email
function sendEmail($subject, $data, $view)
{
	$CI = &get_instance();
	$config = array(
		'useragent' => 'CodeIgniter',
		'protocol' => 'smtp',
		'mailpath' => '/usr/sbin/sendmail',
		'smtp_host' => 'smtp.gmail.com',
		'smtp_user' => 'projekrpl4@gmail.com',
		'smtp_pass' => "Arnan400",
		'smtp_port' => 465,
		'smtp_keepalive' => TRUE,
		'smtp_crypto' => 'ssl',
		'wordwrap' => TRUE,
		'wrapchars' => 76,
		'mailtype' => 'html',
		'charset' => 'utf-8',
		'validate' => TRUE,
		'crlf' => "\r\n",
		'newline' => "\r\n",
	);
	$body = $CI->load->view("Content/Email/" . $view, $data, TRUE);
	$CI->email->initialize($config);
	$CI->email->from('projekrpl4@gmail.com', 'POS Application');
	$CI->email->to($data["email"]);
	$CI->email->subject($subject);
	$CI->email->message($body);
	if ($CI->email->send()) {
		return "1";
	} else {
		echo $CI->email->print_debugger();
		return "0";
	}
}

// Random Password
function randomPassword()
{
	$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';

	$pass = array(); //remember to declare $pass as an array
	$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
	for ($i = 0; $i < 8; $i++) {
		$n = rand(0, $alphaLength);
		$pass[] = $alphabet[$n];
	}
	return implode($pass); //turn the array into a string
}

//Fungsi Cek User sudah login
function checkOnLogin()
{
	$CI = &get_instance();
	if (!$CI->session->userdata('is_logged_in')) {
		redirect("Admin/Login");
		// die();
	}
}

// Fungsi Cek User jika belum Login
function checkNoLogin()
{
	$ci = &get_instance();
	$user_session = $ci->session->userdata('idUser');
	if (!$user_session) {
		redirect('Admin/Login');
	}
}

// Format Rupiah
function formatRupiah($angka)
{
	return "Rp." . number_format($angka, 2, ",", ".") . ",-";
}

