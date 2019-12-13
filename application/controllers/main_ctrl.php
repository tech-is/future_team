<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_ctrl extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// tokenの生成
		$_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(24));
	}

	public function index()
	{
		$this->load->view('login_view');
	}

	public function view_sign_up()
	{
		$this->load->view('sign_up_view');
	}
}
