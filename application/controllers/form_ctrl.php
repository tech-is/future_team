<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_ctrl extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		if(isset($_COOKIE['csrf_cookie'])){
			$this->load->view('form_view');
		}else{
			$data['csrf_token'] = $this->security->get_csrf_token_name();
			$data['csrf_hash'] = $this->security->get_csrf_hash();
			$this->load->view('login_view',$data);
		}
	}

	public function mtof()
	{
		// POSTの受け取り
		$send_date = $this->input->post('time');
		$send_name = $this->input->post('send_name');
		$message = $this->input->post('message');
		$myImage = $this->input->post('myImage');
		$mail = $this->input->post('mail');

		// 拡張子配列
		$fileType = ['png','PNG','jpg','JPG'];

		// 正規表現
		if(!preg_match('|\d{4}\-\d{1,2}\-\d{1,2}|',$send_date)) {
			$result['result'] = "not_match";
			$result['error_time'] = "日付に誤りがあります";
		}

		// 現在の時間より後の日付か確認する
		$this->load->helper('date');
		$datestring = '%Y/%m/%d';
		$time = time();
		$today = strtotime(mdate($datestring, $time));
		$select_date = strtotime($send_date);
		if($today > $select_date) {
			$result['result'] = "not_match";
			$result['error_time'] = "日付に誤りがあります";
		}

		// 画像の確認
		$info = pathinfo($_FILES['myImage']['name']);

		// 拡張子の取り出し
		if(array_search($info['extension'],$fileType) !== false) {
			// 画像のサイズを縮小する。
			if($_FILES['myImage']['size'] < 1000000) {
				$config = [
					'source_image' => $info['basename'],
					'width' => 50
				];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
			}else{
				$result['result'] = "not_match";
				$result['error_size'] = "画像のサイズが大きすぎます";
			}
		}else{
			$result['result'] = "not_match";
			$result['error_img'] = "選択した画像は添付できません";
		}
		if(!preg_match('/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/',$mail)) {
			$result['result'] = "not_match";
			$result['error_mail'] = "送付先の入力に誤りがあります";
		}
		if(!empty($result)){
			echo json_encode($result,JSON_UNESCAPED_UNICODE);
			exit;
		}

		$this->load->helper('date');
		$data = [
			'send_date' => $send_date,
			'user_id' => $_SESSION['id'],
			'to_name' => $send_name,
			'message' => $message,
			'file_name' => $_FILES['myImage']['name'],
			'to_address' => $mail
		];
		$this->load->model('Model_form');
		// 書き込みメソッド実行
		$add = $this->Model_form->add_mail_info($data);
		if(!$add){
			$result['result'] = 'error';
			$result['error'] = '入力された内容に誤りがあります。';
			echo json_encode($result,JSON_UNESCAPED_UNICODE);
			exit;
		}else{
			// 写真の名前をid名に変更してimg_dataに保存する
			$path = 'C:\xampp\htdocs\MtoF\img_data';
				// echo $path;
				if(!file_exists($path)) {
					mkdir($path,0777,true);
				}
				rename($_FILES['myImage']['tmp_name'],$path.'/'.$add);

			$result['result'] = 'success';
			$result['success'] = '未来へ送信完了';
			echo  json_encode($result,JSON_UNESCAPED_UNICODE);
			exit;
		}
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
		$this->load->view('form_view');
	}

	public function login_view()
	{
		$this->load->view("login_view");
	}
}