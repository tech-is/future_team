<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Send_mail_ctrl extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// 現在の時刻を取得
		date_default_timezone_set('Asia/Tokyo');
        $time_now = date("Y-M-d");
		$this->load->model('Model_send_mail');
		$this->load->helper('url');
		// 書き込みメソッドの実行
		$mai_inf = $this->Model_send_mail->send_mail($time_now);
		// mail送信機能
		$this->load->library('email');
		// アドレスの設定
		$this->email->from($mail_inf['to_address'], $mail_inf['to_name']);
		// 件名の設定
		$this->email->subject('未来からのメール');
		// メールの本文の設定
		$this->email->message($mail_inf['message']);
		// 添付ファイルの送信
		$this->email->attach($mail_inf['file_name']);
		// メール送信
		$this->email->send();
	}

	// errorが起きたら、管理者にmailを送る機能
}

?>