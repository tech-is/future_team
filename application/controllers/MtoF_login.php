<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MtoF_login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// SESSIONの生成
		$_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(24));
		if(isset($_SESSION['id'])){
		// if(isset($_SESSION['user'] %% $_SESSION['user'] === $_COOKIE["login_token"])){
			$this->load->model('Model_login');
			$this->load->helper('url');
			// 書き込みメソッド実行
			$get_user_inf = $this->Model_login->get_user($_SESSION['id']);
			$this->load->view('view_my_pages',$get_user_inf);
		}else{
			$this->load->view('view_login');
		}
	}

	public function login()
	{
		// $_SESSIONとトークンが同じ場合処理をする
		if($_SESSION['token'] === $this->input->post('token')){
			// post受け取り
			$name = $this->input->post('name');
			$email = $this->input->post('mail');
			$password = $this->input->post('pswd');
			// 正規表現
			if(!preg_match('/^[ァ-ヶ]+$/u',$name)) {
                $result['result'] = "not_match";
                $result['error_match'] = "名前の入力値に誤りがあります。";
                echo json_encode($result,JSON_UNESCAPED_UNICODE);
                exit;
            }
            if(!preg_match('/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/',$email) ){
                $result['result'] = "not_match";
                $result['error_match'] = "メールの入力値に誤りがあります。";
                echo json_encode($result,JSON_UNESCAPED_UNICODE);
                exit;
            }
            if(!preg_match('/^[A-Za-z]{8,}$/',$password)){
                $result['result'] = "not_match";
                $result['error_match'] = "パスワードの入力値に誤りがあります。";
                echo json_encode($result,JSON_UNESCAPED_UNICODE);
                exit;
			}
			$data = [
				'name' => $name,
                'mail_address' => $email,
                'password' => $password
			];
			// DBの内容とポストの内容を参照する
			$this->load->model('Model_login');
			$this->load->helper('url');
			// 書き込みメソッド実行
			$check = $this->Model_login->model_login_check($data);
			if(!$check){
				echo json_encode(["result" => "error", 'error_message' => '入力された内容に誤りがあります']);
				exit;
			}else{
				// idを照合
				$_SESSION['id'] = $check['id'];
				// ['success_message' => 'ログインしました'];
				echo json_encode(["result" => "success", 'success_message' => 'ログインしました']);
				exit;
			}
		}else{
			echo json_encode(["result" => "error", 'error_message' => 'サーバーエラー']);
		}

	}

	function logout()
	{
		// sessionの破棄
		session_destroy();
		redirect('MtoF_login');
	}
}