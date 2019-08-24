<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Akun extends CI_Model
{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function tampil_semua_user(){
		$this->db->from('sism_user');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function get_user($user)
	{
		return $this->db->get_where('sism_user',$user);
	}
	public function hapus_akun($where) {
		$this->db->where($where);
		$this->db->delete('sism_user');
	}
	public function edit_akun($where) {
		return $this->db->get_where('sism_user',$where);
	}
	public function update_akun($where,$data){
		$this->db->where($where);
		$this->db->update('sism_user',$data);
	}

}
