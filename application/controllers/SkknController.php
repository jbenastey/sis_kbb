<?php


class SkknController extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('SuratModel');
		if($this->session->has_userdata('session_id')==null){
			redirect('login');
		}
	}
	public function index() {
		$data['skkn'] = $this->SuratModel->view_data('dbsurat_skkn');

		$this->load->view('templates/header');
		$this->load->view('skkn/index', $data);
		$this->load->view('templates/footer');
	}
	public function buat() {
		if (isset($_POST['simpan'])){
			$skkn_nomor = $this->input->post('nomor_surat');
			$skkn_nama = $this->input->post('nama_lengkap');
			$skkn_tanggal_lahir = $this->input->post('tanggal_lahir');
			$skkn_tempat_lahir = $this->input->post('tempat_lahir');
			$skkn_wni = $this->input->post('kewarganegaraan');
			$skkn_jk = $this->input->post('jenis_kelamin');
			$skkn_agama = $this->input->post('agama');
			$skkn_kerja = $this->input->post('pekerjaan');
			$skkn_status = $this->input->post('status');
			$skkn_nik = $this->input->post('nik');
			$skkn_alamat = $this->input->post('alamat');
			$data = array(
				'skkn_nomor' => $skkn_nomor,
				'skkn_tanggal_lahir' => $skkn_tanggal_lahir,
				'skkn_nama' => $skkn_nama,
				'skkn_tempat_lahir' => $skkn_tempat_lahir,
				'skkn_wni' => $skkn_wni,
				'skkn_jk' => $skkn_jk,
				'skkn_agama' => $skkn_agama,
				'skkn_kerja' =>  $skkn_kerja,
				'skkn_status' => $skkn_status,
				'skkn_nik' => $skkn_nik,
				'skkn_alamat' => $skkn_alamat,
			);
			$simpan = $this->SuratModel->insert('dbsurat_skkn',$data);
			if ($simpan>0) {
				$this->session->set_flashdata('alert','berhasil_buat_surat');
				redirect('skkn');
			}
			else{
				redirect('skkn');
			}
		}


	}
	public function lihat($id){
		$data = array(
			'skkn' => $this->SuratModel->view_data_by_id($id,'skkn_id','dbsurat_skkn'),
			'skkn_detail' => $this->SuratModel->view_data_skkn_by_id($id)
		);

		$this->load->view('templates/header');
		$this->load->view('skkn/lihat', $data);
		$this->load->view('templates/footer');
	}
	public function hapus($id){
		$this->SuratModel->delete('skkn_id',$id,'dbsurat_skkn');
		$this->session->set_flashdata('alert','berhasil_menghapus_surat');
		redirect('skkn');
	}
	public function edit($id) {
		$where = array('skkn_id' => $id);
		$data['skkn'] =$this->SuratModel->edit_skkn($where)->result();

		$this->load->view('templates/header');
		$this->load->view('skkn/edit', $data);
		$this->load->view('templates/footer');
	}

	public function update($id) {
		$skkn_nomor = $this->input->post('nomor_surat');
		$skkn_nama = $this->input->post('nama_lengkap');
		$skkn_tanggal_lahir = $this->input->post('tanggal_lahir');
		$skkn_tempat_lahir = $this->input->post('tempat_lahir');
		$skkn_wni = $this->input->post('kewarganegaraan');
		$skkn_jk = $this->input->post('jenis_kelamin');
		$skkn_agama = $this->input->post('agama');
		$skkn_kerja = $this->input->post('pekerjaan');
		$skkn_status = $this->input->post('status');
		$skkn_nik = $this->input->post('nik');
		$skkn_alamat = $this->input->post('alamat');
		$data = array(
			'skkn_nomor' => $skkn_nomor,
			'skkn_tanggal_lahir' => $skkn_tanggal_lahir,
			'skkn_nama' => $skkn_nama,
			'skkn_tempat_lahir' => $skkn_tempat_lahir,
			'skkn_wni' => $skkn_wni,
			'skkn_jk' => $skkn_jk,
			'skkn_agama' => $skkn_agama,
			'skkn_kerja' =>  $skkn_kerja,
			'skkn_status' => $skkn_status,
			'skkn_nik' => $skkn_nik,
			'skkn_alamat' => $skkn_alamat,
		);
//		$where = array(
//			'skkn_id' => $id
//		);
		$this->SuratModel->update('skkn_id',$id,'dbsurat_skkn',$data);

		$this->session->set_flashdata('alert','berhasil_edit_skkn');
		redirect('skkn');
	}
	public function setujui_skkn($id){
		$data_disposisi = array(
			'skkn_disposisi' => 'Setuju',
		);

		$this->SuratModel->update('skkn_id',$id,'dbsurat_skkn',$data_disposisi);
		$this->session->set_flashdata('alert','berhasil_menyetujui_surat');
		redirect('skkn');
	}
	public function cetak($id){
		$data = array(
			'skkn' => $this->SuratModel->view_data_by_id($id,'skkn_id','dbsurat_skkn'),
			'skkn_detail' => $this->SuratModel->view_data_skkn_by_id($id)
		);

		$this->load->view('templates/header');
		$this->load->view('skkn/cetak', $data);
		$this->load->view('templates/footer');
	}
	public function laporan(){
		if (isset($_POST['lihat'])){
			$tanggal1 = $this->input->post('tanggal1');
			$tanggal2 = $this->input->post('tanggal2');

			$data['laporan'] = $this->SuratModel->view_laporan('dbsurat_skkn','skkn_tanggal',$tanggal1,$tanggal2);
			$data['tanggal1'] = $tanggal1;
			$data['tanggal2'] = $tanggal2;
			$this->load->view('templates/header');
			$this->load->view('skkn/arsip',$data);
			$this->load->view('templates/footer');
		} else {
			$this->load->view('templates/header');
			$this->load->view('skkn/laporan');
			$this->load->view('templates/footer');
		}

	}
}
