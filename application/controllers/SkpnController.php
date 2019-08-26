<?php


class SkpnController extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('SuratModel');
		if($this->session->has_userdata('session_id')==null){
			redirect('login');
		}
	}
	public function index() {
		$data['skpn'] = $this->SuratModel->view_data('dbsurat_skpn');

		$this->load->view('templates/header');
		$this->load->view('skpn/index', $data);
		$this->load->view('templates/footer');
	}
	public function buat() {
		if (isset($_POST['simpan'])){
			$skpn_nomor = $this->input->post('nomor_surat');
			$skpn_nama = $this->input->post('nama_lengkap');
			$skpn_tanggal_lahir = $this->input->post('tanggal_lahir');
			$skpn_tempat_lahir = $this->input->post('tempat_lahir');
			$skpn_wni = $this->input->post('kewarganegaraan');
			$skpn_jk = $this->input->post('jenis_kelamin');
			$skpn_agama = $this->input->post('agama');
			$skpn_kerja = $this->input->post('pekerjaan');
			$skpn_status = $this->input->post('status');
			$skpn_nik = $this->input->post('nik');
			$skpn_alamat = $this->input->post('alamat');
			$data = array(
				'skpn_nomor' => $skpn_nomor,
				'skpn_tanggal_lahir' => $skpn_tanggal_lahir,
				'skpn_nama' => $skpn_nama,
				'skpn_tempat_lahir' => $skpn_tempat_lahir,
				'skpn_wni' => $skpn_wni,
				'skpn_jk' => $skpn_jk,
				'skpn_agama' => $skpn_agama,
				'skpn_kerja' =>  $skpn_kerja,
				'skpn_status' => $skpn_status,
				'skpn_nik' => $skpn_nik,
				'skpn_alamat' => $skpn_alamat,
			);
			$simpan = $this->SuratModel->insert('dbsurat_skpn',$data);
			if ($simpan>0) {
				$this->session->set_flashdata('alert','berhasil_buat_surat');
				redirect('skpn');
			}
			else{
				redirect('skpn');
			}
		}


	}
	public function lihat($id){
		$data = array(
			'skpn' => $this->SuratModel->view_data_by_id($id,'skpn_id','dbsurat_skpn'),
			'skpn_detail' => $this->SuratModel->view_data_skpn_by_id($id)
		);

		$this->load->view('templates/header');
		$this->load->view('skpn/lihat', $data);
		$this->load->view('templates/footer');
	}
	public function hapus($id){
		$this->SuratModel->delete('skpn_id',$id,'dbsurat_skpn');
		$this->session->set_flashdata('alert','berhasil_menghapus_surat');
		redirect('skpn');
	}
	public function edit($id) {
		$where = array('skpn_id' => $id);
		$data['skpn'] =$this->SuratModel->edit_skpn($where)->result();

		$this->load->view('templates/header');
		$this->load->view('skpn/edit', $data);
		$this->load->view('templates/footer');
	}

	public function update($id) {
		$skpn_nomor = $this->input->post('nomor_surat');
		$skpn_nama = $this->input->post('nama_lengkap');
		$skpn_tanggal_lahir = $this->input->post('tanggal_lahir');
		$skpn_tempat_lahir = $this->input->post('tempat_lahir');
		$skpn_wni = $this->input->post('kewarganegaraan');
		$skpn_jk = $this->input->post('jenis_kelamin');
		$skpn_agama = $this->input->post('agama');
		$skpn_kerja = $this->input->post('pekerjaan');
		$skpn_status = $this->input->post('status');
		$skpn_nik = $this->input->post('nik');
		$skpn_alamat = $this->input->post('alamat');
		$data = array(
			'skpn_nomor' => $skpn_nomor,
			'skpn_tanggal_lahir' => $skpn_tanggal_lahir,
			'skpn_nama' => $skpn_nama,
			'skpn_tempat_lahir' => $skpn_tempat_lahir,
			'skpn_wni' => $skpn_wni,
			'skpn_jk' => $skpn_jk,
			'skpn_agama' => $skpn_agama,
			'skpn_kerja' =>  $skpn_kerja,
			'skpn_status' => $skpn_status,
			'skpn_nik' => $skpn_nik,
			'skpn_alamat' => $skpn_alamat,
		);
//		$where = array(
//			'skpn_id' => $id
//		);
		$this->SuratModel->update('skpn_id',$id,'dbsurat_skpn',$data);

		$this->session->set_flashdata('alert','berhasil_edit_skpn');
		redirect('skpn');
	}
	public function setujui_skpn($id){
		$data_disposisi = array(
			'skpn_disposisi' => 'Setuju',
		);

		$this->SuratModel->update('skpn_id',$id,'dbsurat_skpn',$data_disposisi);
		$this->session->set_flashdata('alert','berhasil_menyetujui_surat');
		redirect('skpn');
	}
	public function cetak($id){
		$data = array(
			'skpn' => $this->SuratModel->view_data_by_id($id,'skpn_id','dbsurat_skpn'),
			'skpn_detail' => $this->SuratModel->view_data_skpn_by_id($id)
		);

		$this->load->view('templates/header');
		$this->load->view('skpn/cetak', $data);
		$this->load->view('templates/footer');
	}
	public function laporan(){
		if (isset($_POST['lihat'])){
			$tanggal1 = $this->input->post('tanggal1');
			$tanggal2 = $this->input->post('tanggal2');

			$data['laporan'] = $this->SuratModel->view_laporan('dbsurat_skpn','skpn_tanggal',$tanggal1,$tanggal2);
			$data['tanggal1'] = $tanggal1;
			$data['tanggal2'] = $tanggal2;
			$this->load->view('templates/header');
			$this->load->view('skpn/arsip',$data);
			$this->load->view('templates/footer');
		} else {
			$this->load->view('templates/header');
			$this->load->view('skpn/laporan');
			$this->load->view('templates/footer');
		}

	}
}
