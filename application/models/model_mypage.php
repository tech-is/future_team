<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Model_mypage extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        function mypages_info($user_id)
        {
            try
            {
                // idの情報からメールの情報を取得する
                $query = $this->db
                ->select('id,user_id,to_name,to_address,send_date,message,file_name,delete_flag,created_at')
                ->get_where('future_mail',['user_id'=>$user_id])
                ->result_array();
                return $query;
            }
            catch(Exception $e)
            {
                $no = "失敗";
                return $no;
            }
        }

        function delete_flag($delete_id)
        {
            try
            {
                $this->db->set('delete_flag','1');
                $this->db->where('id', $delete_id);
                $this->db->update('future_mail');
            }
            catch(Exception $e)
            {
                $no = "失敗";
                return $no;
            }
        }
    }