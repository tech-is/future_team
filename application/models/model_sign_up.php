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
        function model_sign_up_add($data)
        {
            try
            {
                // 重複のpasswordがあるか確認
                $sql="SELECT * FROM user_inf WHERE mail_address=?";
                $query=$this->db->query($sql,$data['mail_address']);
                //もしクエリの行数が1件以上あればfalse
                if($query->num_rows() > 0){
                    return false;
                }else{
                    // それ以外は情報を追加する
                    $this->db->insert('user_inf',$data);
                    return true;
                }
            }
            catch(Exception $e) 
            { 
                ?>
                <script>
                    alert('登録に失敗しました');
                    location.href="/MtoF_sign_up";
                </script>
                <?php
            }
        }
    }

?>