<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_ctrl extends CI_Controller {

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

    public function login()
    {
        // post受け取り
        $name = $this->input->post('name');
        $email = $this->input->post('mail');
        $password = $this->input->post('pswd');
        // 正規表現
        if(!preg_match('/^[ァ-ヶ]+$/u',$name)) {
            $result['result'] = "not_match";
            $result['error_name'] = "名前の入力値に誤りがあります。";
        }
        if(!preg_match('/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/',$email) ){
            $result['result'] = "not_match";
            $result['error_mail'] = "メールの入力値に誤りがあります。";
        }
        if(!preg_match('/^[A-Za-z]{8,}$/',$password)){
            $result['result'] = "not_match";
            $result['error_pswd'] = "パスワードの入力値に誤りがあります。";
        }
        if(!empty($result)){
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
        // 書き込みメソッド実行
        $check = $this->Model_login->model_login_check($data);
        if(!$check){
            echo json_encode(["result" => "error", 'error_message' => '入力された内容に誤りがあります']);
            exit;
        }else{
            // idを照合
            $_SESSION['id'] = $check['id'];
            echo json_encode([
                "result" => "success",
                'success_message' => 'ログインしました'
                ]);
            exit;
        }
    }

}