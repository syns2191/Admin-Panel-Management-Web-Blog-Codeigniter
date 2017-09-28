<?php

class Gudang_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	
	function semua_laporan()
	{
		$this->db->select('*');
		$this->db->from('contentPost');
		$this->db->order_by('id','desc');
		
		return $this->db->get()->result();
	}
	
	function jumlah_semua_laporan()
	{
		$query = $this->db->query('SELECT SUM(jumlah) as jumlah FROM contentPost');
		
		return $query->row();
	}
	
	function chart_laporan()
	{
		$this->db->select('*');
		$this->db->from('laporan');
		$this->db->order_by('id','desc');
		$this->db->limit('10');
		return $this->db->get()->result();
	}
	
	function laporan_hari_ini($tanggal)
	{
		$this->db->select('*');
		$this->db->from('laporan');
		$this->db->where('tanggal',$tanggal);
		$this->db->order_by('id','desc');
		
		return $this->db->get()->result();
	}
	
	function jumlah_laporan_hariini($tanggal)
	{
		$query = $this->db->query('SELECT SUM(jumlah) as jumlah FROM laporan WHERE tanggal = "'. date('d-m-Y', strtotime($tanggal)).'"');
		
		return $query->row();
	}
	
	function laporan_beberapa_hari($tanggal1,$tanggal2)
	{
		$this->db->select('*');
		$this->db->from('laporan');
		$this->db->where('tanggal BETWEEN "'. date('d-m-Y', strtotime($tanggal1)). '" and "'. date('d-m-Y', strtotime($tanggal2)).'"');
		$this->db->order_by('id','desc');
		return $this->db->get()->result();
	}
	
	function jumlah_laporan_beberapahari($tanggal1,$tanggal2)
	{
		$query = $this->db->query('SELECT SUM(jumlah) as jumlah FROM laporan WHERE tanggal BETWEEN "'. date('d-m-Y', strtotime($tanggal1)). '" and "'. date('d-m-Y', strtotime($tanggal2)).'"');
		
		return $query->row();
	}
	
	function tambah_laporan($data)
	{
		$this->db->insert('laporan',$data);
	}
	
	

	// function userLogin()
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('user');
	// 	$this->db->order_by('id','desc');
				
	// 	return $this->db->get()->result();
	// }
}