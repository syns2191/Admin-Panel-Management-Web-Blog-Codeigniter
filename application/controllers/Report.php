<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('post_model');
		$this->load->model('comment_model');
		$this->load->helper('form');
		$this->load->helper('date');
		$this->load->library('pagination');
		$this->load->helper('url');
		
		
		//Ckeditor's configuration
		
	}
	
	
	
	
	
	
	
	function report_all()
	{
		$total_post=$this->post_model->count_post();
		$data['total_post']=$total_post;
		$total_comment=$this->comment_model->count_comment();
		$data['total_comment']=$total_comment;
		$this->load->view('laporan',$data);
	}
	
	
	
}
