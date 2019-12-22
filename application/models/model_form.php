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

        }
    }