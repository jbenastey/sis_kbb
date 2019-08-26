<?php


class SpbpnController extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('SuratModel');
		if($this->session->has_userdata('session_id')==null){
			redirect('login');
		}
	}
	public function index() {
		$data['spbpn'] = $this->SuratModel->view_data('dbsurat_spbpn');

		$this->load->view('templates/header');
		$this->load->view('spbpn/index', $data);
		$this->load->view('templates/footer');
	}
	public function buat() {
		if (isset($_POST['simpan'])){
			$spbpn_nama_lengkap = $this->input->post('nama_lengkap');
			$spbpn_tanggal_lahir = $this->input->post('tanggal_lahir');
			$spbpn_tempat_lahir = $this->input->post('tempat_lahir');
			$spbpn_wni = $this->input->post('kewarganegaraan');
			$spbpn_kerja = $this->input->post('pekerjaan');
			$spbpn_nokk = $this->input->post('nokk');
			$spbpn_nik = $this->input->post('nik');
			$spbpn_alamat = $this->input->post('alamat');
			$data = array(
				'spbpn_nama' => $spbpn_nama_lengkap,
				'spbpn_tanggal_lahir' => $spbpn_tanggal_lahir,
				'spbpn_tempat_lahir' => $spbpn_tempat_lahir,
				'spbpn_wni' => $spbpn_wni,
				'spbpn_nokk' => $spbpn_nokk,
				'spbpn_kerja' =>  $spbpn_kerja,
				'spbpn_nik' => $spbpn_nik,
				'spbpn_alamat' => $spbpn_alamat,
			);
			$simpan = $this->SuratModel->insert('dbsurat_spbpn',$data);
			if ($simpan>0) {
				$this->session->set_flashdata('alert','berhasil_buat_surat');
				redirect('spbpn');
			}
			else{
				redirect('spbpn');
			}
		}


	}
	public function lihat($id){
		$data = array(
			'spbpn' => $this->SuratModel->view_data_by_id($id,'spbpn_id','dbsurat_spbpn'),
			'spbpn_detail' => $this->SuratModel->view_data_spbpn_by_id($id)
		);

		$this->load->view('templates/header');
		$this->load->view('spbpn/lihat', $data);
		$this->load->view('templates/footer');
	}
	public function hapus($id){
		$this->SuratModel->delete('spbpn_id',$id,'dbsurat_spbpn');
		$this->session->set_flashdata('alert','berhasil_menghapus_surat');
		redirect('spbpn');
	}
	public function edit($id) {
		$where = array('spbpn_id' => $id);
		$data['spbpn'] =$this->SuratModel->edit_spbpn($where)->result();

		$this->load->view('templates/header');
		$this->load->view('spbpn/edit', $data);
		$this->load->view('templates/footer');
	}

	public function update($id) {
		$spbpn_nama_lengkap = $this->input->post('nama_lengkap');
		$spbpn_tanggal_lahir = $this->input->post('tanggal_lahir');
		$spbpn_tempat_lahir = $this->input->post('tempat_lahir');
		$spbpn_wni = $this->input->post('kewarganegaraan');
		$spbpn_kerja = $this->input->post('pekerjaan');
		$spbpn_nokk = $this->input->post('nokk');
		$spbpn_nik = $this->input->post('nik');
		$spbpn_alamat = $this->input->post('alamat');
		$data = array(
			'spbpn_nama' => $spbpn_nama_lengkap,
			'spbpn_tanggal_lahir' => $spbpn_tanggal_lahir,
			'spbpn_tempat_lahir' => $spbpn_tempat_lahir,
			'spbpn_wni' => $spbpn_wni,
			'spbpn_nokk' => $spbpn_nokk,
			'spbpn_kerja' =>  $spbpn_kerja,
			'spbpn_nik' => $spbpn_nik,
			'spbpn_alamat' => $spbpn_alamat,
		);
//		$where = array(
//			'spbpn_id' => $id
//		);
		$this->SuratModel->update('spbpn_id',$id,'dbsurat_spbpn',$data);

		$this->session->set_flashdata('alert','berhasil_edit_spbpn');
		redirect('spbpn');
	}
	public function setujui_spbpn($id){
		$data_disposisi = array(
			'spbpn_disposisi' => 'Setuju',
		);

		$this->SuratModel->update('spbpn_id',$id,'dbsurat_spbpn',$data_disposisi);
		$this->session->set_flashdata('alert','berhasil_menyetujui_surat');
		redirect('spbpn');
	}
	public function cetak($id){
		$data = array(
			'spbpn' => $this->SuratModel->view_data_by_id($id,'spbpn_id','dbsurat_spbpn'),
			'spbpn_detail' => $this->SuratModel->view_data_spbpn_by_id($id)
		);

		$this->load->view('templates/header');
		$this->load->view('spbpn/cetak', $data);
		$this->load->view('templates/footer');
	}
	public function laporan(){
		if (isset($_POST['lihat'])){
			$tanggal1 = $this->input->post('tanggal1');
			$tanggal2 = $this->input->post('tanggal2');

			$data['laporan'] = $this->SuratModel->view_laporan('dbsurat_spbpn','spbpn_tanggal',$tanggal1,$tanggal2);
			$data['tanggal1'] = $tanggal1;
			$data['tanggal2'] = $tanggal2;
			$this->load->view('templates/header');
			$this->load->view('spbpn/arsip',$data);
			$this->load->view('templates/footer');
		} else {
			$this->load->view('templates/header');
			$this->load->view('spbpn/laporan');
			$this->load->view('templates/footer');
		}

	}

}
