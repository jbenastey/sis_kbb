<?php


class SktkController extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('SuratModel');
		if($this->session->has_userdata('session_id')==null){
			redirect('login');
		}
	}
	public function index() {
		$data['sktk'] = $this->SuratModel->view_data('dbsurat_sktk');

		$this->load->view('templates/header');
		$this->load->view('sktk/index', $data);
		$this->load->view('templates/footer');
	}
	public function buat() {
		if (isset($_POST['simpan'])){
			$sktk_nomor = $this->input->post('nomor_surat');
			$sktk_nama = $this->input->post('nama_lengkap');
			$sktk_tanggal_lahir = $this->input->post('tanggal_lahir');
			$sktk_tempat_lahir = $this->input->post('tempat_lahir');
			$sktk_wni = $this->input->post('kewarganegaraan');
			$sktk_jk = $this->input->post('jenis_kelamin');
			$sktk_agama = $this->input->post('agama');
			$sktk_kerja = $this->input->post('pekerjaan');
			$sktk_status = $this->input->post('status');
			$sktk_nik = $this->input->post('nik');
			$sktk_alamat = $this->input->post('alamat');
			$sktk_namaibu = $this->input->post('nama_ibu');
			$sktk_namabapak = $this->input->post('nama_bapak');
			$data = array(
				'sktk_nomor' => $sktk_nomor,
				'sktk_tanggal_lahir' => $sktk_tanggal_lahir,
				'sktk_nama' => $sktk_nama,
				'sktk_tempat_lahir' => $sktk_tempat_lahir,
				'sktk_wni' => $sktk_wni,
				'sktk_jk' => $sktk_jk,
				'sktk_agama' => $sktk_agama,
				'sktk_kerja' =>  $sktk_kerja,
				'sktk_status' => $sktk_status,
				'sktk_nik' => $sktk_nik,
				'sktk_alamat' => $sktk_alamat,
				'sktk_namabapak' => $sktk_namabapak,
				'sktk_namaibu' => $sktk_namaibu,
			);
			$simpan = $this->SuratModel->insert('dbsurat_sktk',$data);
			if ($simpan>0) {
				$this->session->set_flashdata('alert','berhasil_buat_surat');
				redirect('sktk');
			}
			else{
				redirect('sktk');
			}
		}


	}
	public function lihat($id){
		$data = array(
			'sktk' => $this->SuratModel->view_data_by_id($id,'sktk_id','dbsurat_sktk'),
			'sktk_detail' => $this->SuratModel->view_data_sktk_by_id($id)
		);

		$this->load->view('templates/header');
		$this->load->view('sktk/lihat', $data);
		$this->load->view('templates/footer');
	}
	public function hapus($id){
		$this->SuratModel->delete('sktk_id',$id,'dbsurat_sktk');
		$this->session->set_flashdata('alert','berhasil_menghapus_surat');
		redirect('sktk');
	}
	public function edit($id) {
		$where = array('sktk_id' => $id);
		$data['sktk'] =$this->SuratModel->edit_sktk($where)->result();

		$this->load->view('templates/header');
		$this->load->view('sktk/edit', $data);
		$this->load->view('templates/footer');
	}

	public function update($id) {
		$sktk_nomor = $this->input->post('nomor_surat');
		$sktk_nama = $this->input->post('nama_lengkap');
		$sktk_tanggal_lahir = $this->input->post('tanggal_lahir');
		$sktk_tempat_lahir = $this->input->post('tempat_lahir');
		$sktk_wni = $this->input->post('kewarganegaraan');
		$sktk_jk = $this->input->post('jenis_kelamin');
		$sktk_agama = $this->input->post('agama');
		$sktk_kerja = $this->input->post('pekerjaan');
		$sktk_status = $this->input->post('status');
		$sktk_nik = $this->input->post('nik');
		$sktk_alamat = $this->input->post('alamat');
		$sktk_namaibu = $this->input->post('nama_ibu');
		$sktk_namabapak = $this->input->post('nama_bapak');
		$data = array(
			'sktk_nomor' => $sktk_nomor,
			'sktk_tanggal_lahir' => $sktk_tanggal_lahir,
			'sktk_nama' => $sktk_nama,
			'sktk_tempat_lahir' => $sktk_tempat_lahir,
			'sktk_wni' => $sktk_wni,
			'sktk_jk' => $sktk_jk,
			'sktk_agama' => $sktk_agama,
			'sktk_kerja' =>  $sktk_kerja,
			'sktk_status' => $sktk_status,
			'sktk_nik' => $sktk_nik,
			'sktk_alamat' => $sktk_alamat,
			'sktk_namabapak' => $sktk_namabapak,
			'sktk_namaibu' => $sktk_namaibu,
		);
//		$where = array(
//			'sktk_id' => $id
//		);
		$this->SuratModel->update('sktk_id',$id,'dbsurat_sktk',$data);

		$this->session->set_flashdata('alert','berhasil_edit_sktk');
		redirect('sktk');
	}
	public function setujui_sktk($id){
		$data_disposisi = array(
			'sktk_disposisi' => 'Setuju',
		);

		$this->SuratModel->update('sktk_id',$id,'dbsurat_sktk',$data_disposisi);
		$this->session->set_flashdata('alert','berhasil_menyetujui_surat');
		redirect('sktk');
	}
	public function cetak($id){
		$data = array(
			'sktk' => $this->SuratModel->view_data_by_id($id,'sktk_id','dbsurat_sktk'),
			'sktk_detail' => $this->SuratModel->view_data_sktk_by_id($id)
		);

		$this->load->view('templates/header');
		$this->load->view('sktk/cetak', $data);
		$this->load->view('templates/footer');
	}
	public function laporan(){
		if (isset($_POST['lihat'])){
			$tanggal1 = $this->input->post('tanggal1');
			$tanggal2 = $this->input->post('tanggal2');

			$data['laporan'] = $this->SuratModel->view_laporan('dbsurat_sktk','sktk_tanggal',$tanggal1,$tanggal2);
			$data['tanggal1'] = $tanggal1;
			$data['tanggal2'] = $tanggal2;
			$this->load->view('templates/header');
			$this->load->view('sktk/arsip',$data);
			$this->load->view('templates/footer');
		} else {
			$this->load->view('templates/header');
			$this->load->view('sktk/laporan');
			$this->load->view('templates/footer');
		}

	}
}
