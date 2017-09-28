<?php

class Notification_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	function countNotif($criteria){
		$this->db->select('*');
		$this->db->from('notifications');
		$this->db->where('status',$criteria);
		
		return $this->db->get()->num_rows();
	}

	function batch($criteria){
		$this->db->select('*');
		$this->db->from('notifications');
		$this->db->where('status',$criteria);
		
		return $this->db->get()->result();
	}

	function listNotif(){
		$this->db->select('*');
		$this->db->from('notifications');

		return $this->db->get()->result();
	}

	function allNotif(){
		$this->db->select('*');
		$this->db->from('notifications');

		return $this->db->get()->result();
	}

	function readNotif($id){
		$this->db->set('status',1,FALSE);
		$this->db->where('id',$id);
		$this->db->update('notifications');
	}
}