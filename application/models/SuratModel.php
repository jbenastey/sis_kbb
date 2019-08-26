<?php


class SuratModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function view_data($table)
	{
		return $this->db->get($table)->result_array();
	}

	function view_data_by_id($id, $key, $table)
	{
		$this->db->where($key, $id);
		return $this->db->get($table)->row_array();
	}

	function view_data_skb_by_id($id)
	{
		$this->db->from('dbsurat_skb');
		$this->db->join('dbsurat_skb_detail', 'dbsurat_skb_detail.detail_skb_id = dbsurat_skb.skb_id');
		$this->db->where('skb_id', $id);
		return $this->db->get()->result_array();
	}

	function view_data_ppak_by_id($id)
	{
		$this->db->from('dbsurat_ppak');
		$this->db->join('dbsurat_ppak_detail', 'dbsurat_ppak_detail.detail_ppak_id = dbsurat_ppak.ppak_id');
		$this->db->where('ppak_id', $id);
		return $this->db->get()->result_array();
	}

	function view_data_skck_by_id($id)
	{
		$this->db->from('dbsurat_skck');
		$this->db->where('skck_id', $id);
		return $this->db->get()->result_array();
	}

	function view_data_ktps_by_id($id)
	{
		$this->db->from('dbsurat_ktps');
		$this->db->where('ktps_id', $id);
		return $this->db->get()->result_array();
	}

	function view_data_skh_by_id($id)
	{
		$this->db->from('dbsurat_skh');
		$this->db->where('skh_id', $id);
		return $this->db->get()->result_array();
	}

	function view_data_skkn_by_id($id)
	{
		$this->db->from('dbsurat_skkn');
		$this->db->where('skkn_id', $id);
		return $this->db->get()->result_array();
	}

	function view_data_skpn_by_id($id)
	{
		$this->db->from('dbsurat_skpn');
		$this->db->where('skpn_id', $id);
		return $this->db->get()->result_array();
	}

	function view_data_sktk_by_id($id)
	{
		$this->db->from('dbsurat_sktk');
		$this->db->where('sktk_id', $id);
		return $this->db->get()->result_array();
	}

	function view_data_sku_by_id($id)
	{
		$this->db->from('dbsurat_sku');
		$this->db->where('sku_id', $id);
		return $this->db->get()->result_array();
	}

	function view_data_spbpn_by_id($id)
	{
		$this->db->from('dbsurat_spbpn');
		$this->db->where('spbpn_id', $id);
		return $this->db->get()->result_array();
	}

	function insert($table, $data)
	{
		return $this->db->insert($table, $data);
	}

	function delete($key, $id, $table)
	{
		$this->db->where($key, $id);
		return $this->db->delete($table);
	}

	function update($key, $id, $table, $data)
	{
		$this->db->where($key, $id);
		return $this->db->update($table, $data);
	}

	public function edit_skck($where)
	{
		return $this->db->get_where('dbsurat_skck', $where);
	}

	public function edit_ktps($where)
	{
		return $this->db->get_where('dbsurat_ktps', $where);
	}

	public function edit_ppak($where)
	{
		return $this->db->get_where('dbsurat_ppak', $where);
	}

	public function edit_skb($where)
	{
		return $this->db->get_where('dbsurat_skb', $where);
	}

	public function edit_skh($where)
	{
		return $this->db->get_where('dbsurat_skh', $where);
	}

	public function edit_skkn($where)
	{
		return $this->db->get_where('dbsurat_skkn', $where);
	}

	public function edit_skpn($where)
	{
		return $this->db->get_where('dbsurat_skpn', $where);
	}

	public function edit_sktk($where)
	{
		return $this->db->get_where('dbsurat_sktk', $where);
	}

	public function edit_sku($where)
	{
		return $this->db->get_where('dbsurat_sku', $where);
	}

	public function edit_spbpn($where)
	{
		return $this->db->get_where('dbsurat_spbpn', $where);
	}

	public function view_skb_detail($id){
		$this->db->where('detail_skb_id', $id);
		return $this->db->get('dbsurat_skb_detail')->result_array();
	}
	public function view_ppak_detail($id){
		$this->db->where('detail_ppak_id', $id);
		return $this->db->get('dbsurat_ppak_detail')->result_array();
	}
	public function view_laporan($table,$column,$date1,$date2){
		$query = "select * from $table where $column between '$date1' and '$date2'";
		return $this->db->query($query)->result_array();
	}
	public function total_setuju($table,$column){
		$this->db->where($column, 'Setuju');
		return $this->db->get($table)->result_array();
	}

}
