<?php


class SkhController extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('SuratModel');
		if($this->session->has_userdata('session_id')==null){
			redirect('login');
		}
	}
	public function index() {
		$data['skh'] = $this->SuratModel->view_data('dbsurat_skh');

		$this->load->view('templates/header');
		$this->load->view('skh/index', $data);
		$this->load->view('templates/footer');
	}
	public function buat() {
		if (isset($_POST['simpan'])){
			$skh_nomor = $this->input->post('nomor_surat');
			$skh_nama = $this->input->post('nama_lengkap');
			$skh_tanggal_lahir = $this->input->post('tanggal_lahir');
			$skh_tempat_lahir = $this->input->post('tempat_lahir');
			$skh_jk = $this->input->post('jenis_kelamin');
			$skh_agama = $this->input->post('agama');
			$skh_kerja = $this->input->post('pekerjaan');
			$skh_nik = $this->input->post('nik');
			$skh_baranghilang = $this->input->post('barang_hilang');
			$skh_keterangan = $this->input->post('keterangan');
			$skh_alamat = $this->input->post('alamat');
			$data = array(
				'skh_nomor' => $skh_nomor,
				'skh_tanggal_lahir' => $skh_tanggal_lahir,
				'skh_nama' => $skh_nama,
				'skh_tempat_lahir' => $skh_tempat_lahir,
				'skh_jk' => $skh_jk,
				'skh_agama' => $skh_agama,
				'skh_kerja' =>  $skh_kerja,
				'skh_nik' => $skh_nik,
				'skh_baranghilang' => $skh_baranghilang,
				'skh_keterangan' => $skh_keterangan,
				'skh_alamat' => $skh_alamat,
			);
			$simpan = $this->SuratModel->insert('dbsurat_skh',$data);
			if ($simpan>0) {
				$this->session->set_flashdata('alert','berhasil_buat_surat');
				redirect('skh');
			}
			else{
				redirect('skh');
			}
		}


	}
	public function lihat($id){
		$data = array(
			'skh' => $this->SuratModel->view_data_by_id($id,'skh_id','dbsurat_skh'),
			'skh_detail' => $this->SuratModel->view_data_skh_by_id($id)
		);

		$this->load->view('templates/header');
		$this->load->view('skh/lihat', $data);
		$this->load->view('templates/footer');
	}
	public function hapus($id){
		$this->SuratModel->delete('skh_id',$id,'dbsurat_skh');
		$this->session->set_flashdata('alert','berhasil_menghapus_surat');
		redirect('skh');
	}
	public function edit($id) {
		$where = array('skh_id' => $id);
		$data['skh'] =$this->SuratModel->edit_skh($where)->result();

		$this->load->view('templates/header');
		$this->load->view('skh/edit', $data);
		$this->load->view('templates/footer');
	}

	public function update($id) {
		$skh_nomor = $this->input->post('nomor_surat');
		$skh_nama = $this->input->post('nama_lengkap');
		$skh_tanggal_lahir = $this->input->post('tanggal_lahir');
		$skh_tempat_lahir = $this->input->post('tempat_lahir');
		$skh_jk = $this->input->post('jenis_kelamin');
		$skh_agama = $this->input->post('agama');
		$skh_kerja = $this->input->post('pekerjaan');
		$skh_nik = $this->input->post('nik');
		$skh_baranghilang = $this->input->post('barang_hilang');
		$skh_keterangan = $this->input->post('keterangan');
		$skh_alamat = $this->input->post('alamat');
		$data = array(
			'skh_nomor' => $skh_nomor,
			'skh_tanggal_lahir' => $skh_tanggal_lahir,
			'skh_nama' => $skh_nama,
			'skh_tempat_lahir' => $skh_tempat_lahir,
			'skh_jk' => $skh_jk,
			'skh_agama' => $skh_agama,
			'skh_kerja' =>  $skh_kerja,
			'skh_nik' => $skh_nik,
			'skh_baranghilang' => $skh_baranghilang,
			'skh_keterangan' => $skh_keterangan,
			'skh_alamat' => $skh_alamat,
		);
//		$where = array(
//			'skh_id' => $id
//		);
		$this->SuratModel->update('skh_id',$id,'dbsurat_skh',$data);

		$this->session->set_flashdata('alert','berhasil_edit_skh');
		redirect('skh');
	}
	public function setujui_skh($id){
		$data_disposisi = array(
			'skh_disposisi' => 'Setuju',
		);

		$this->SuratModel->update('skh_id',$id,'dbsurat_skh',$data_disposisi);
		$this->session->set_flashdata('alert','berhasil_menyetujui_surat');
		redirect('skh');
	}
	public function cetak($id){
		$data = array(
			'skh' => $this->SuratModel->view_data_by_id($id,'skh_id','dbsurat_skh'),
			'skh_detail' => $this->SuratModel->view_data_skh_by_id($id)
		);

		$this->load->view('templates/header');
		$this->load->view('skh/cetak', $data);
		$this->load->view('templates/footer');
	}
	public function laporan(){
		if (isset($_POST['lihat'])){
			$tanggal1 = $this->input->post('tanggal1');
			$tanggal2 = $this->input->post('tanggal2');

			$data['laporan'] = $this->SuratModel->view_laporan('dbsurat_skh','skh_tanggal',$tanggal1,$tanggal2);
			$data['tanggal1'] = $tanggal1;
			$data['tanggal2'] = $tanggal2;
			$this->load->view('templates/header');
			$this->load->view('skh/arsip',$data);
			$this->load->view('templates/footer');
		} else {
			$this->load->view('templates/header');
			$this->load->view('skh/laporan');
			$this->load->view('templates/footer');
		}

	}

}
