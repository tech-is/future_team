<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MtoF_form extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('view_form');
	}

	public function view_sign_up()
	{
		$this->load->view('view_sign_up');
	}

	public function view_log_in()
	{
		$this->load->view('view_log_in');
	}
}
