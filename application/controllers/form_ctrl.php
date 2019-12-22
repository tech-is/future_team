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
		$hash = $this->security->get_csrf_hash();
	}

	public function mtof()
	{
		// POSTの受け取り
		$time = $this->input->post('time');
		$send_name = $this->input->post('send_name');
		$message = $this->input->post('message');
		$myImage = $this->input->post('myImage');
		$mail = $this->input->post('mail');
		// 正規表現
		if(!preg_match('|\d{4}\-\d{1,2}\-\d{1,2}|',$time)) {
			$result['result'] = "not_time";
			$result['error'] = "日付に誤りがあります";
			echo json_encode($result,JSON_UNESCAPED_UNICODE);
			exit;
		}

		// 現在の時間より後の日付か確認する
		// if() {
			
		// }
		
		if(strpos($myImage,'.jpg') === false || strpos($myImage,'.JPG') === false || strpos($myImage,'.png') === false || strpos($myImage,'.PNG') === false) {
			$result['result'] = "not_image";
			$result['error'] = "選択した画像は添付できません";
			echo json_encode($result,JSON_UNESCAPED_UNICODE);
			exit;
		}else{
			// 画像のサイズを縮小する


		}
		if(!preg_match('/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/',$mail)) {
			$result['result'] = "not_mail";
			$result['error'] = "送付先の入力に誤りがあります";
			echo json_encode($result,JSON_UNESCAPED_UNICODE);
			exit;
		}

		$data = [
			'time' => $time,
			'send_mail' => $send_mail,
			'message' => $message,
			'myImage' => $myImage,
			'mail' => $mail
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
			$result['result'] = 'success';
			$result['success'] = '未来へ送信完了';
			echo  json_encode($Result,JSON_UNESCAPED_UNICODE);
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
		$this->load->view('view_form');
	}

	public function login_view()
	{
		$this->load->view("login_view");
	}
}