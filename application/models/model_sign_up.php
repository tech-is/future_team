<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    // sessionが開始していない場合sessionを開始する
    if(!isset($_SESSION)){
        session_start();
    }

    class Model_sign_up extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        // DBに新規登録の情報を追加する
        function model_sign_up_add()
        {
            $name =  $this->input->post('name',true);
            $email = $this->input->post('mail',true);
            $password = $this->input->post('pswd',true);
            // $passwordをハッシュ化
            $hash = password_hash($password, PASSWORD_DEFAULT);
            try
            {
                $data = array(
                    'name' => $name,
                    'mail_address' => $email,
                    'password' => $hash
                );
                // 重複のpasswordがあるか確認
                $this->db->select('password');
                $this->db->from('user_inf');
                $get_password = $this->db->get();
                if($email === $get_password){ ?>
                    <script>
                        alert('メールアドレスが重複しています。"\n"その他のメールアドレスをご登録ください。');
                    </script><?php
                    redirect('MtoF_sign_up');
                }else{
                    // DBに情報を追加
                    $result = $this->db->insert('user_inf',$data);
                    return $result;
                }
            }
            catch(Exception $e) { ?>
                <script>
                    alert('登録に失敗しました');
                </script><?php
                redirect('MtoF_sign_up');
            }
        }
    }
?>
