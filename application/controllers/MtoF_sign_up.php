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
        // ssesion_idとトークンが同じ場合処理をする
        $token = $this->input->post('token');
        if($_SESSION['token'] === $token){
            // post受け取り
            // $passwordをハッシュ化
            $password = $this->input->post('pswd');
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $data = [
                'name' => $name =  $this->input->post('name'),
                'mail_address' => $email = $this->input->post('mail'),
                'password' => $hash
            ];
            $this->load->model('Model_sign_up',);
            $this->load->helper('url');
            // 書き込みメソッド実行
            $check = $this->Model_sign_up->model_sign_up_add($data);
            if(!$check){ //$checkの中身がbool値であることを忘れないようにすること
                ?>
                <script>
                alert('入力されたメールアドレスは、使用することができません。');
                location.href="/MtoF_sign_up";
                </script><?php
            }else{
                ?>
                <script>
                alert('登録完了しました。');
                location.href="/MtoF_sign_up";
                </script>
                <?php
                }
        }else{
            redirect("../../error.php");
            exit;
        }
    }
}
