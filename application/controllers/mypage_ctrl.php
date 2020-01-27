<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mypage_ctrl extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('Model_mypage');
        $get_user_inf = $this->Model_mypage->mypages_info($_SESSION['id']);
        // データの数をカウントして配列の先頭に格納
        array_unshift($get_user_inf,count($get_user_inf));
        // 配列としてviewへ渡す
        $this->load->view('mypage_view',array('data' => $get_user_inf));
    }

    public function logout()
    {
        // sessionの破棄
        session_destroy();
        // erorr対策
        $data['csrf_token'] = $this->security->get_csrf_token_name();
        $data['csrf_hash'] = $this->security->get_csrf_hash();
        $this->load->view('login_view',$data);
    }

    public function delete()
    {
        $delete_id = $this->input->post('delete_id');
        echo $delete_id;
        // メールの削除
        $this->load->model('Model_mypage');
        $this->Model_mypage->delete_flag($delete_id);
    }

    public function change(){
        // POSTの受け取り
        $pk_id = $this->input->post("pk_id");
        $send_date = $this->input->post('time');
        // var_dump($send_date);
        $send_name = $this->input->post('send_name');
        $message = $this->input->post('message');
        $myImage = $this->input->post('myImage');
        $mail = $this->input->post('mail');
        

        // print_r($_POST);
        // print_r($_FILES);
        // exit;
        // 拡張子配列
        $fileType = ['png','PNG','jpg','jpeg','JPG'];

        // 正規表現
        if(!preg_match('|\d{4}\-\d{1,2}\-\d{1,2}|',$send_date)) {
            $result['result'] = "not_match";
			$result['error_time'] = "日付に誤りがあります";
        }

        // 現在の時間より後の日付か確認する
        // if() {

        // }

        // 画像の確認
        if(!empty($_FILES['myImage'])){
            if($_FILES['myImage']['error'] === 0){
                $info = pathinfo($_FILES['myImage']['name']);
                
                // 拡張子の取り出し
                if(array_search($info['extension'],$fileType) !== false) {
                    // 画像のサイズを縮小する。
                    if($_FILES['myImage']['size'] < 1000000) {
                        $config = [
                            'source_image' => $info['basename'],
                            'width' => 50
                        ];
                        $this->load->library('image_lib', $config);
                        $this->image_lib->resize();
                    }else{
                        $result['result'] = "not_match";
                        $result['error_size'] = "画像のサイズが大きすぎます";
                    }
                }else{
                    $result['result'] = "not_match";
                    $result['error_img'] = "選択した画像は添付できません";
                }
            }
        }
        if(!preg_match('/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/',$mail)) {
            $result['result'] = "not_match";
            $result['error_mail'] = "送付先の入力に誤りがあります";
        }
        if(!empty($result)){
			echo json_encode($result,JSON_UNESCAPED_UNICODE);
			exit;
		}

        $this->load->helper('date');
        $data = [
            'id' => $pk_id,
            'send_date' => $send_date,
            'user_id' => $_SESSION['id'],
            'to_name' => $send_name,
            'message' => $message,
            'file_name' => $_FILES['myImage']['name'],
            'to_address' => $mail
        ];
        $this->load->model('Model_mypage');
        // 書き込みメソッド実行
        $edit = $this->Model_mypage->change_data($data);
        if(!$edit){
            $result['result'] = 'error';
            $result['error'] = '入力された内容に誤りがあります。';
            echo json_encode($result,JSON_UNESCAPED_UNICODE);
            exit;
        }elseif($_FILES['myImage'] === 0){
            // 写真の名前をid名に変更してimg_dataに保存する
            $path = 'C:\xampp\htdocs\MtoF\img_data';
                // echo $path;
                if(!file_exists($path)) {
                    mkdir($path,0777,true);
                }
                rename($_FILES['myImage']['tmp_name'],$path.'/'.$edit);
        }
            $result['result'] = 'success';
            $result['success'] = '変更完了';
            echo  json_encode($result,JSON_UNESCAPED_UNICODE);
            exit;
    }
}