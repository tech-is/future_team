<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

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
            try {
                // 重複のmail_addressがあるか確認
                $this->db->where("mail_address",$data['mail_address']);
                $query=$this->db->get("user_inf");
                //もしクエリの行数が1件以上あればfalse
                if($query->num_rows() > 0){
                    return false;
                }else{
                    // それ以外は情報を追加する
                    $this->db->insert('user_inf',$data);
                    return true;
                }
            }
            catch(Exception $e) {
                
                return false;
            }
        }
    }

?>