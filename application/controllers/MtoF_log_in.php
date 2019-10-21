<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MtoF_log_in extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
        $this->load->view('view_log_in');
	}

}
