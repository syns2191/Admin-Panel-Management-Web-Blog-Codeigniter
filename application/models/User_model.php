<?php

class User_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function userLogin()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->order_by('id','desc');
				
		return $this->db->get()->result();
	}
}