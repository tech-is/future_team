<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Model_send_mail extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        // DB future_mailの情報を取得する
        public function send_mail($time_now){
            try 
            {
                $spl=$this->db->where("send_data",$time_now);
                // $sql="SELECT * FROM future_mail WHERE send_date = $time_now";
                $query=$this->db->query($sql);
                if(isset($query)){
                    $query = $this->db
                    ->select('to_name, to_address,send_date,message,file_name')
                    ->get_where('future_mail')->row_array();
                return $query;
                }else{
                    // 一致するmailがなかった場合処理を終了する
                    exit;
                }
            }
            catch(Exception $e) 
            { 
                ?>
                <script>
                    alert('失敗しました');
                    location.href="/MtoF_sign_up";
                </script>
                <?php
            }
        } 

    }