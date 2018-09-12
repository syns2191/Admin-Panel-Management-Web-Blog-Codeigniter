<?php

class Post_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	function semua_post($limit,$start)
	{
		$query = $this->db->get("contentPost");
		$this->db->select('*');
		$this->db->from('contentPost');
		$this->db->limit($limit,$start);
		// $this->db->where('id', $id);
		$this->db->order_by('id','desc');
		if ($query->num_rows() > 0) {
	        return $this->db->get()->result();
	      } else {
	      	return array();
	      }
	    return false;

				
		// return $this->db->get()->result();

		// $this->db->limit($limit);
		// $this->db->where('id', $id);
		// $query = $this->db->get("contentPost");
		// if ($query->num_rows() > 0) {
		// 	foreach ($query->result() as $row) {
		// 		$data[] = $row;
		// 	}

		// 	return $data;
		// }
		// return false;
		
	}

	function count_post(){
		$this->db->select('*');
		$this->db->from('contentPost');
		// $this->db->order_by('id','desc');
				
		return $this->db->get()->num_rows();
	}
	
	function tambah_post($data1)
	{
		$this->db->insert('contentPost',$data1);
	}
	
	function select_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('contentPost');
		$this->db->where('id',$id);
		
		return $this->db->get()->row();
	}
	
	//Mencari id dilaporan berdasarkan tanggal
	
	function go_edit($id,$data1)
	{
		$this->db->where('id',$id);
		$this->db->update('contentPost',$data1);
	}
	
	function delete_pos($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('contentPost');
	}

	function chart_post(){
		
		$this->db->select("Year(dateTime),
	  		Month(dateTime),
	  		Count(*) As Total_Rows");
		$this->db->from('contentPost');
		$this->db->group_by('Year(`dateTime`), Month(`dateTime`)');

		return $this->db->get()->result();

	}
	// function userLogin()
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('user');
	// 	$this->db->order_by('id','desc');
				
	// 	return $this->db->get()->result();
	// }
}