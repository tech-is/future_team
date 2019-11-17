<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_ctrl extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(24)); // tokenの生成
	}

	public function index()
	{
		$this->load->view('form_view');
	}

	public function view_sign_up()
	{
		$this->load->view('view_sign_up');
	}

	public function view_form()
	{
		$this->load->view('view_form');
	}

	public function login_view()
	{
		$this->load->view("login_view");
	}
}
