<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_ctrl extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // csrf対策
        $data['csrf_token'] = $this->security->get_csrf_token_name();
        $data['csrf_hash'] = $this->security->get_csrf_hash();
        if(isset($_SESSION['id'])){
            $this->load->model('Model_mypage');
            $get_user_inf = $this->Model_mypage->mypages_info($_SESSION['id']);
            // データの数をカウントして配列の先頭に格納
            array_unshift($get_user_inf,count($get_user_inf));
            // 配列としてviewへ渡す
            $this->load->view('mypage_view',array('data' => $get_user_inf));
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
