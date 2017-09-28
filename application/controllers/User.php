<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->helper('form');
		$this->load->helper('date');
	}
	
	public function userdata()
	{
		// $data['laporan'] = $this->gudang_model->chart_laporan();
		$data['user'] = $this->user_model->userLogin();
		$this->load->view('sidebar',$data);
	}

	function viewprofile(){
		$this->load->view('profile');
	}
	
}
