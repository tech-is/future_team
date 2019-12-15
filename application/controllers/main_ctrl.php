<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_ctrl extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		show_404(); 
		exit;

		// csrf対策
		$data['csrf_token'] = $this->security->get_csrf_token_name();
		$data['csrf_hash'] = $this->security->get_csrf_hash();
		if(isset($_SESSION['id'])){
			$this->load->model('Model_login');
			// 書き込みメソッド実行
			$get_user_inf = $this->Model_login->get_user($_SESSION['id']);
			$this->load->view('mypage_view',$get_user_inf);
		}else{
			$this->load->view('login_view',$data);
		}
	}

	public function view_sign_up()
	{
		// csrf対策
		$data['csrf_token'] = $this->security->get_csrf_token_name();
		$data['csrf_hash'] = $this->security->get_csrf_hash();
		$this->load->view('sign_up_view',$data);
	}
}
