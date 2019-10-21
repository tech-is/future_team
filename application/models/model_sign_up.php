<?php
    if(!defined('BASEPATH')) exit('No direct script access allowed');

    class Model_sign_up extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        // DBに新規登録の情報を追加する
        function model_sign_up()
        {
            $check=$_POST['post_check'];
            return $check;
        }
    }