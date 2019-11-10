<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MtoF_sign_up extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
        // SESSIONの生成
        $_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(24));
        $this->load->view('view_sign_up');
	}

    public function add_information()
    {
        $token = $this->input->post('token');
        // $_SESSIONとトークンが同じ場合処理をする
        if($_SESSION['token'] === $token){
            // post受け取り
            $name =  $this->input->post('name');
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
            // passwordをハッシュ化
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $data = [
                'name' => $name,
                'mail_address' => $email,
                'password' => $hash
            ];
            $this->load->model('Model_sign_up',);
            $this->load->helper('url');
            // 書き込みメソッド実行
            $check = $this->Model_sign_up->model_sign_up_add($data);
            $result = [];
            // $checkがfalseを返した場合
            if(!$check){
                $result['result'] = "error";
                $result['error_message'] = "入力されたメールアドレスはお使いになれません。";
                echo json_encode($result,JSON_UNESCAPED_UNICODE);
            // $checkがtrueを返した場合
            }else{
                $result['result'] = "success";
                $result['success_message'] = "登録完了しました。";
                echo json_encode($result,JSON_UNESCAPED_UNICODE);
            }
            exit;
        }else{
            ?>
            <script>
                alert("サーバーエラー");
                location.href="/MtoF_sign_up";
            </script>
            <?php
        }
        
    }
}
