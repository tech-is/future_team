<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Model_login extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        // DBの内容とpostの内容を参照する
        function model_login_check($data)
        {
            try
            {
                // postされた名前、メアドの内容と一致するか
                $query = $this->db
                ->select('id, password')
                ->get_where(
                    'user_inf',
                    [
                        'name'=>$data['name'],
                        'mail_address'=>$data['mail_address'],
                        'delete_flag'=>0
                    ]
                )->row_array();
                return password_verify($data['password'], @$query['password'])? $query: false;
            }
            catch(Exception $e)
            {
                $no = "失敗";
                return $no;
            }
        }

        // idでuserの情報を取得
        function get_user($user_id)
        {
            try
            {
                // idの情報から名前、メアド、delete_flagを参照。
                $query = $this->db
                ->select('name, mail_address, delete_flag')
                ->get_where('user_inf',['id'=>$user_id])
                ->row_array();
                return $query;
            }
            catch(Exception $e)
            {
                $no = "失敗";
                return $no;
            }
        }
    }
?>