<?php
defined('BASEPATH') OR exit('No direct script access allowed');

<<<<<<< HEAD:application/controllers/form_ctrl.php
class Form_ctrl extends CI_Controller {
=======
class MtoF extends CI_Controller {
>>>>>>> sign_up:application/controllers/MtoF.php

	public function __construct()
	{
		parent::__construct();
		// tokenの生成
		$_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(24));
	}

	public function index()
	{
<<<<<<< HEAD:application/controllers/form_ctrl.php
		$this->load->view('form_view');
=======
		$this->load->view('view_login');
>>>>>>> sign_up:application/controllers/MtoF.php
	}

	public function view_sign_up()
	{
		$this->load->view('view_sign_up');
	}

	public function view_form()
	{
		$this->load->view('view_form');
	}
}
