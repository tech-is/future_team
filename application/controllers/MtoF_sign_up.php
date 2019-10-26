<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MtoF_sign_up extends CI_Controller {

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
        // ssesion_idとトークンが同じ場合処理をする
        $token = $this->input->post('token');
        if(session_id() === $token){
            $this->load->model('Model_sign_up');
            $this->load->helper('url');
            // 書き込みメソッド実行
            $check = $this->Model_sign_up->model_sign_up_add();
            if(!$check){ //$checkの中身がbool値であることを忘れないようにすること
            //  if(!$check){
            //  if(!false)

            //  if($check === true)
            //  if($chceck)
            //  if(true)

                ?><script>
                alert('入力されたメールアドレスは、使用することができません。');
                location.href="/MtoF_sign_up";
                </script><?php
            }else{
                ?><script>
                alert('登録完了しました。');
                location.href="/MtoF_sign_up";
                </script><?php
                }
        }else{
            die('もう一度お試しください。');
        }
    }
}
