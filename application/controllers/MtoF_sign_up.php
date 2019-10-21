<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MtoF_sign_up extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
        $this->load->view('view_sign_up');
	}

    public function add_information()
    {
        if(isset($_POST['post_check'])){
            $this->load->model('model_sign_up');
            echo $check;
        }
    }
}
