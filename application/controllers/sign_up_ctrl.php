<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_up_ctrl extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('view_sign_up');
    }

    public function add_information()
    {
        // post受け取り
        $name =  $this->input->post('name');
        $email = $this->input->post('mail');
        $password = $this->input->post('pswd');
        $check_pswd = $this->input->post('check_pswd');
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
            $result['error_pswd']= "パスワードの入力値に誤りがあります。";
        }
        if($password !== $check_pswd){
            $result['result'] = "not_match";
            $result['error_pswd']= "パスワードの入力値に誤りがあります。";
        }

        if(!empty($result['result'])){
            echo json_encode($result,JSON_UNESCAPED_UNICODE);
            exit;
        }
        // passwordをハッシュ化
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $data = [
            'name' => $name,
            'mail_address' => $email,
            'password' => $hash
        ];
        $this->load->model('Model_sign_up');
        // 書き込みメソッド実行
        $check = $this->Model_sign_up->model_sign_up_add($data);
        $result = [];
        // $checkがfalseを返した場合
        if(!$check){
            $result['result'] = "not_match";
            $result['common_mail'] = "入力されたメールアドレスはお使いになれません。";
            echo json_encode($result,JSON_UNESCAPED_UNICODE);
        // $checkがtrueを返した場合
        }else{
            $result['result'] = "success";
            $result['success_message'] = "登録完了しました。";
            echo json_encode($result,JSON_UNESCAPED_UNICODE);
        }
        exit;
    }
}
