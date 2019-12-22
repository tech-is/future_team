<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mypage_ctrl extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
    }

    public function index()
    {
        $this->load->model('Model_mypage');
        $get_user_inf = $this->Model_mypage->mypages_info($_SESSION['id']);
        // データの数をカウントして配列の先頭に格納
        array_unshift($get_user_inf,count($get_user_inf));
        // 配列としてviewへ渡す
        $this->load->view('mypage_view',array('data' => $get_user_inf));
    }

    public function logout()
	{
		// sessionの破棄
		session_destroy();
		// erorr対策
		$data['csrf_token'] = $this->security->get_csrf_token_name();
		$data['csrf_hash'] = $this->security->get_csrf_hash();
		$this->load->view('login_view',$data);
    }

    public function delete()
    {
        $delete_id = $this->input->post('delete_id');
        // メールの削除
        $this->load->model('Model_mypage');
        $this->Model_mypage->delete_flag($delete_id);
    }

    public function change(){
        // 正規表現をする

        $modal_data = $this->input->post('modal_data');
        var_dump($modal_data);
        $this->load->view('mypage_view',$modal_data);
    }
}