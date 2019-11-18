<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_ctrl extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('form_view');

		var_dump($_POST);

		$hash = $this->security->get_csrf_hash();

		var_dump($hash);

		var_dump($_SESSION);
	}

	public function get_post() {
		
	}

	public function send_mail()
	{

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