<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Model_form extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        public function add_mail_info($data)
        {
            try
            {
                // メールの内容を保存する
                $this->db->insert('future_mail',$data);
                // insertした列のidをとってくる
                $id = $this->db->insert_id();
                return $id;
            }
            catch(Exception $e)
            {
                ?>
                <script>
                    alert('登録に失敗しました');
                    location.href="/MtoF_login";
                </script>
                <?php
            }
            var_dump($data);
        }
    }