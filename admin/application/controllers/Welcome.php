<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library("session");

		if(!get_active_user()){
			redirect(base_url("login"));
		}


	}

	public function index()
	{
		$this->load->view('welcome_message');
		$this->session->get_userdata("user");
	}
}
