<?php


class SkuController extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('SuratModel');
		if($this->session->has_userdata('session_id')==null){
			redirect('login');
		}
	}
	public function index() {
		$data['sku'] = $this->SuratModel->view_data('dbsurat_sku');

		$this->load->view('templates/header');
		$this->load->view('sku/index', $data);
		$this->load->view('templates/footer');
	}
	public function buat() {
		if (isset($_POST['simpan'])){
			$sku_nomor = $this->input->post('nomor_surat');
			$sku_nama = $this->input->post('nama_lengkap');
			$sku_tanggal_lahir = $this->input->post('tanggal_lahir');
			$sku_tempat_lahir = $this->input->post('tempat_lahir');
			$sku_wni = $this->input->post('kewarganegaraan');
			$sku_jk = $this->input->post('jenis_kelamin');
			$sku_agama = $this->input->post('agama');
			$sku_kerja = $this->input->post('pekerjaan');
			$sku_status = $this->input->post('status');
			$sku_nik = $this->input->post('nik');
			$sku_nama_usaha = $this->input->post('nama_usaha');
			$sku_no_register = $this->input->post('nomor_register');
			$sku_alamat = $this->input->post('alamat');
			$data = array(
				'sku_nomor' => $sku_nomor,
				'sku_tanggal_lahir' => $sku_tanggal_lahir,
				'sku_nama' => $sku_nama,
				'sku_tempat_lahir' => $sku_tempat_lahir,
				'sku_wni' => $sku_wni,
				'sku_jk' => $sku_jk,
				'sku_agama' => $sku_agama,
				'sku_kerja' =>  $sku_kerja,
				'sku_status' => $sku_status,
				'sku_nik' => $sku_nik,
				'sku_nama_usaha' => $sku_nama_usaha,
				'sku_no_register' => $sku_no_register,
				'sku_alamat' => $sku_alamat,
			);
			$simpan = $this->SuratModel->insert('dbsurat_sku',$data);
			if ($simpan>0) {
				$this->session->set_flashdata('alert','berhasil_buat_surat');
				redirect('sku');
			}
			else{
				redirect('sku');
			}
		}


	}
	public function lihat($id){
		$data = array(
			'sku' => $this->SuratModel->view_data_by_id($id,'sku_id','dbsurat_sku'),
			'sku_detail' => $this->SuratModel->view_data_sku_by_id($id)
		);

		$this->load->view('templates/header');
		$this->load->view('sku/lihat', $data);
		$this->load->view('templates/footer');
	}
	public function hapus($id){
		$this->SuratModel->delete('sku_id',$id,'dbsurat_sku');
		$this->session->set_flashdata('alert','berhasil_menghapus_surat');
		redirect('sku');
	}
	public function edit($id) {
		$where = array('sku_id' => $id);
		$data['sku'] =$this->SuratModel->edit_sku($where)->result();

		$this->load->view('templates/header');
		$this->load->view('sku/edit', $data);
		$this->load->view('templates/footer');
	}

	public function update($id) {
		$sku_nomor = $this->input->post('nomor_surat');
		$sku_nama = $this->input->post('nama_lengkap');
		$sku_tanggal_lahir = $this->input->post('tanggal_lahir');
		$sku_tempat_lahir = $this->input->post('tempat_lahir');
		$sku_wni = $this->input->post('kewarganegaraan');
		$sku_jk = $this->input->post('jenis_kelamin');
		$sku_agama = $this->input->post('agama');
		$sku_kerja = $this->input->post('pekerjaan');
		$sku_status = $this->input->post('status');
		$sku_nik = $this->input->post('nik');
		$sku_nama_usaha = $this->input->post('nama_usaha');
		$sku_no_register = $this->input->post('nomor_register');
		$sku_alamat = $this->input->post('alamat');
		$data = array(
			'sku_nomor' => $sku_nomor,
			'sku_tanggal_lahir' => $sku_tanggal_lahir,
			'sku_nama' => $sku_nama,
			'sku_tempat_lahir' => $sku_tempat_lahir,
			'sku_wni' => $sku_wni,
			'sku_jk' => $sku_jk,
			'sku_agama' => $sku_agama,
			'sku_kerja' =>  $sku_kerja,
			'sku_status' => $sku_status,
			'sku_nik' => $sku_nik,
			'sku_nama_usaha' => $sku_nama_usaha,
			'sku_no_register' => $sku_no_register,
			'sku_alamat' => $sku_alamat,
		);
//		$where = array(
//			'sku_id' => $id
//		);
		$this->SuratModel->update('sku_id',$id,'dbsurat_sku',$data);

		$this->session->set_flashdata('alert','berhasil_edit_sku');
		redirect('sku');
	}
	public function setujui_sku($id){
		$data_disposisi = array(
			'sku_disposisi' => 'Setuju',
		);

		$this->SuratModel->update('sku_id',$id,'dbsurat_sku',$data_disposisi);
		$this->session->set_flashdata('alert','berhasil_menyetujui_surat');
		redirect('sku');
	}
	public function cetak($id){
		$data = array(
			'sku' => $this->SuratModel->view_data_by_id($id,'sku_id','dbsurat_sku'),
			'sku_detail' => $this->SuratModel->view_data_sku_by_id($id)
		);

		$this->load->view('templates/header');
		$this->load->view('sku/cetak', $data);
		$this->load->view('templates/footer');
	}
	public function laporan(){
		if (isset($_POST['lihat'])){
			$tanggal1 = $this->input->post('tanggal1');
			$tanggal2 = $this->input->post('tanggal2');

			$data['laporan'] = $this->SuratModel->view_laporan('dbsurat_sku','sku_tanggal',$tanggal1,$tanggal2);
			$data['tanggal1'] = $tanggal1;
			$data['tanggal2'] = $tanggal2;
			$this->load->view('templates/header');
			$this->load->view('sku/arsip',$data);
			$this->load->view('templates/footer');
		} else {
			$this->load->view('templates/header');
			$this->load->view('sku/laporan');
			$this->load->view('templates/footer');
		}

	}
}
