<?php

class Comment_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	function commentView($id){
		$this->db->select('*');
		$this->db->from('comment');
		$this->db->where('contentPost_id',$id);
		$this->db->order_by('dateTime','desc');
		
		return $this->db->get()->result();
	}
	function viewreplay($id){
		$this->db->select('*');
		$this->db->from('commentReplay');
		$this->db->where('comment_id',$id);
		// $this->db->order_by('dateTime','desc');
		
		return $this->db->get()->result();
	}

	function replay($id){
		$this->db->select('*');
		$this->db->from('commentReplay');
		$this->db->where('id',$id);
		// $this->db->order_by('dateTime','desc');
		
		return $this->db->get()->row();
	}
	function count_comment(){
		$this->db->select('*');
		$this->db->from('comment');
		// $this->db->order_by('id','desc');
				
		return $this->db->get()->num_rows();
	}
}