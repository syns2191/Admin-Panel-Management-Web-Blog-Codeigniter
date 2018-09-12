<?php
// defined('BASEPATH') OR exit('No direct script access allowed');
// session_start(); //we need to start session in order to access it through CI

Class User_Authentication extends CI_Controller {

	public function __construct() {
		parent::__construct();

		// Load form helper library
		$this->load->helper('form');

		$this->load->helper('security');

		// Load form validation library
		$this->load->library('form_validation');

		// Load session library
		$this->load->library('session');

		// Load database
		$this->load->model('Login_Database');
		$this->load->model('post_model');
	}

	// Show login page
	public function index() {
		$this->load->view('login_form');
	}

	// Show registration page
	public function user_registration_show() {
		$this->load->view('registration_form');
	}

	// Validate and store registration data in database
	public function new_user_registration() {

		// Check validation for user input in SignUp form
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email_value', 'Email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('registration_form');
		} else {
			$data = array(
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email_value'),
			'password' => $this->input->post('password')
			);
		$result = $this->Login_Database->registration_insert($data);
		if ($result == TRUE) {
			$data['message_display'] = 'Registration Successfully !';
			$this->load->view('login_form', $data);
		} else {
			$data['message_display'] = 'Username already exist!';
			$this->load->view('registration_form', $data);
		}
		}
	}

	// Check for user login process
	public function user_login_process() {

		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE) {
			if(isset($this->session->userdata['logged_in'])){
				$data['laporan'] = $this->post_model->chart_post();
					// $data['user'] = $this->gudang_model->userLogin();
					$this->load->view('beranda',$data);
				// $this->load->view('beranda');
			}else{
				$this->load->view('login_form');
				}
		} else {
			$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
			);
			$result = $this->Login_Database->login($data);
			if ($result == TRUE) {

				$username = $this->input->post('username');
				$result = $this->Login_Database->read_user_information($username);
				if ($result != false) {
					$session_data = array(
						'username' => $result[0]->username,
						'email' => $result[0]->email,
						'displayName' => $result[0]->displayName,
						'displayPicture' => $result[0]->displayPicture,
					);
					// Add user data in session
					$this->session->set_userdata('logged_in', $session_data);
					$data['laporan'] = $this->post_model->chart_post();
					// $data['user'] = $this->gudang_model->userLogin();
					$this->load->view('beranda',$data);
					// $this->load->view('admin_page');
				}
			} else {
			$data = array(
				'error_message' => 'Invalid Username or Password'
			);
			$this->load->view('login_form', $data);
			}
		}	
	}

	// Logout from admin page
	 function logout() {

		// Removing session data
		$sess_array = array(
		'username' => ''
		);
		$this->session->unset_userdata('logged_in', $sess_array);
		// $data['message_display'] = 'Successfully Logout';
		$this->load->view('login_form');
	}

}

?>