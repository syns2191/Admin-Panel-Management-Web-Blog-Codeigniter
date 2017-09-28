<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('post_model');
		$this->load->helper('form');
		$this->load->helper('date');
		$this->load->library('pagination');
		$this->load->helper('url');
		
		
		//Ckeditor's configuration
		
	}
	
	public function index()
	{
		// $data['post'] = $this->post_model->semua_post();

		$config['base_url'] = site_url('post/index');
        $config['total_rows'] = $this->post_model->count_post();
        $config['per_page'] = "5";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<div class="pagination">';
        $config['full_tag_close'] = '</div>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //call the model function to get the department data
        $data['post'] = $this->post_model->semua_post($config["per_page"], $data['page']);           

        $data['pagination'] = $this->pagination->create_links();

        //load the department_view
        // $this->load->view('department_view',$data); 


		// $data['jumlahbarang'] = $this->gudang_model->jumlah_semua_barang();
		// $data['user'] = $this->gudang_model->userLogin();
		// $this->load->view('post_view',$data);
		$this->load->view('listPost',$data);
	}
	
	
	function tambahpost()
	{
		// $data['user'] = $this->gudang_model->userLogin();
		$this->load->helper('ckeditor');
 
		$this->data['ckeditor'] = array(
		
			//ID of the textarea that will be replaced
			'id' 	=> 	'isiContent',
			'path'	=>	'assets/ckeditor',
		
			//Optionnal values
			'config' => array(
				'toolbar' 	=> 	"Full", 	//Using the Full toolbar
				'width' 	=> 	"550px",	//Setting a custom width
				'height' 	=> 	'100px',	//Setting a custom height
					
			),
		
			//Replacing styles from the "Styles tool"
			'styles' => array(
			
				//Creating a new style named "style 1"
				'style 1' => array (
					'name' 		=> 	'Blue Title',
					'element' 	=> 	'h2',
					'styles' => array(
						'color' 	=> 	'Blue',
						'font-weight' 	=> 	'bold'
					)
				),
				
				//Creating a new style named "style 2"
				'style 2' => array (
					'name' 	=> 	'Red Title',
					'element' 	=> 	'h2',
					'styles' => array(
						'color' 		=> 	'Red',
						'font-weight' 		=> 	'bold',
						'text-decoration'	=> 	'underline'
					)
				)				
			)
		);
		$this->load->view('addpost_view',$this->data);
	}
	

	function prosesPost()
	{

		$data1['title'] = $this->input->post('title',true);
		$data1['subTitle'] = $this->input->post('subTitle',true);
		$data1['isiContent'] = $this->input->post('isiContent',true);
		$data1['imgCover'] = $this->input->post('imgCover',true);
		$today = date("Y-m-d H:i:s"); 
		$data1['dateTime'] = $today;
		$this->post_model->tambah_post($data1);
			redirect('post');
		
	}
	
	function editpos($id)
	{
		$data['post'] = $this->post_model->select_by_id($id);
		// $data['user'] = $this->gudang_model->userLogin();
		$this->load->view('editpos_view',$data);
	}
	
	function goedit($id)
	{
		$data1['title'] = $this->input->post('title',true);
		$data1['subTitle'] = $this->input->post('subTitle',true);
		$data1['isiContent'] = $this->input->post('isiContent',true);
		$data1['imgCover'] = $this->input->post('imgCover',true);
		$id=$this->input->post('id',true);
		
		$this->post_model->go_edit($id,$data1);
		redirect('post');
	}
	
	function deletepos($id)
	{
		$this->post_model->delete_pos($id);
		redirect('post');
	}

	function tes(){
		$data = $this->post_model->chart_post();

		$data['chart_post'] = json_encode($data);
		// echo $aa;

	}
	
	
	
}
