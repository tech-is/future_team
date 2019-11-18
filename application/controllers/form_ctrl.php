<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_ctrl extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// sessionが開始していない場合sessionを開始する
		if(!isset($_SESSION)){
			session_start();
		}
	}

	public function index()
	{
		$this->load->view('form_view');
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
