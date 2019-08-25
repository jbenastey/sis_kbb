<?php


class SkckController extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('SuratModel');
		if($this->session->has_userdata('session_id')==null){
			redirect('login');
		}
	}
	public function index() {
		$data['skck'] = $this->SuratModel->view_data('dbsurat_skck');

		$this->load->view('templates/header');
		$this->load->view('skck/index', $data);
		$this->load->view('templates/footer');
	}
	public function buat() {
		if (isset($_POST['simpan'])){
				$skck_nomor = $this->input->post('nomor_surat');
				$skck_nama = $this->input->post('nama_lengkap');
				$skck_tanggal_lahir = $this->input->post('tanggal_lahir');
				$skck_tempat_lahir = $this->input->post('tempat_lahir');
				$skck_wni = $this->input->post('kewarganegaraan');
				$skck_jk = $this->input->post('jenis_kelamin');
				$skck_agama = $this->input->post('agama');
				$skck_kerja = $this->input->post('pekerjaan');
				$skck_status = $this->input->post('status');
				$skck_nik = $this->input->post('nik');
				$skck_keperluan = $this->input->post('keperluan');
				$skck_alamat = $this->input->post('alamat');
				$skck_tanggal = date('Y-m-d');
				$data = array(
					'skck_nomor' => $skck_nomor,
					'skck_tanggal_lahir' => $skck_tanggal_lahir,
					'skck_nama' => $skck_nama,
					'skck_tempat_lahir' => $skck_tempat_lahir,
					'skck_wni' => $skck_wni,
					'skck_jk' => $skck_jk,
					'skck_agama' => $skck_agama,
					'skck_kerja' =>  $skck_kerja,
					'skck_status' => $skck_status,
					'skck_nik' => $skck_nik,
					'skck_keperluan' => $skck_keperluan,
					'skck_alamat' => $skck_alamat,
					'skck_tanggal' => $skck_tanggal,
				);
				$simpan = $this->SuratModel->insert('dbsurat_skck',$data);
				if ($simpan>0) {
					$this->session->set_flashdata('alert','berhasil_buat_skck');
					redirect('skck');
				}
				else{
					redirect('skck');
				}
			}
		}
	public function edit($id) {
		$where = array('skck_id' => $id);
		$data['skck'] =$this->SuratModel->edit_skck($where)->result();

		$this->load->view('templates/header');
		$this->load->view('skck/edit', $data);
		$this->load->view('templates/footer');
	}

	public function update($id) {
		$skck_nomor = $this->input->post('nomor_surat');
		$skck_nama = $this->input->post('nama_lengkap');
		$skck_tanggal_lahir = $this->input->post('tanggal_lahir');
		$skck_tempat_lahir = $this->input->post('tempat_lahir');
		$skck_wni = $this->input->post('kewarganegaraan');
		$skck_jk = $this->input->post('jenis_kelamin');
		$skck_agama = $this->input->post('agama');
		$skck_kerja = $this->input->post('pekerjaan');
		$skck_status = $this->input->post('status');
		$skck_nik = $this->input->post('nik');
		$skck_keperluan = $this->input->post('keperluan');
		$skck_alamat = $this->input->post('alamat');
		$data = array(
			'skck_nomor' => $skck_nomor,
			'skck_tanggal_lahir' => $skck_tanggal_lahir,
			'skck_nama' => $skck_nama,
			'skck_tempat_lahir' => $skck_tempat_lahir,
			'skck_wni' => $skck_wni,
			'skck_jk' => $skck_jk,
			'skck_agama' => $skck_agama,
			'skck_kerja' =>  $skck_kerja,
			'skck_status' => $skck_status,
			'skck_nik' => $skck_nik,
			'skck_keperluan' => $skck_keperluan,
			'skck_alamat' => $skck_alamat,
		);
//		$where = array(
//			'skck_id' => $id
//		);
		$this->SuratModel->update('skck_id',$id,'dbsurat_skck',$data);

		$this->session->set_flashdata('alert','berhasil_edit_skck');
		redirect('skck');
	}
	public function lihat($id){
		$data = array(
			'skck' => $this->SuratModel->view_data_by_id($id,'skck_id','dbsurat_skck'),
			'skck_detail' => $this->SuratModel->view_data_skck_by_id($id)
		);

		$this->load->view('templates/header');
		$this->load->view('skck/lihat', $data);
		$this->load->view('templates/footer');
	}
	public function cetak($id){
		$data = array(
			'skck' => $this->SuratModel->view_data_by_id($id,'skck_id','dbsurat_skck'),
			'skck_detail' => $this->SuratModel->view_data_skck_by_id($id)
		);

		$this->load->view('templates/header');
		$this->load->view('skck/cetak', $data);
		$this->load->view('templates/footer');
	}
	public function hapus($id){
		$this->SuratModel->delete('skck_id',$id,'dbsurat_skck');
		$this->session->set_flashdata('alert','berhasil_menghapus_skck');
		redirect('skck');
	}
	public function setujui_skck($id){
		$data_disposisi = array(
			'skck_disposisi' => 'Setuju',
		);

		$this->SuratModel->update('skck_id',$id,'dbsurat_skck',$data_disposisi);
		$this->session->set_flashdata('alert','berhasil_menyetujui_surat');
		redirect('skck');
	}
	public function laporan(){
		if (isset($_POST['lihat'])){
			$tanggal1 = $this->input->post('tanggal1');
			$tanggal2 = $this->input->post('tanggal2');

			$data['laporan'] = $this->SuratModel->view_laporan('dbsurat_skck','skck_tanggal',$tanggal1,$tanggal2);
			$data['tanggal1'] = $tanggal1;
			$data['tanggal2'] = $tanggal2;
			$this->load->view('templates/header');
			$this->load->view('skck/arsip',$data);
			$this->load->view('templates/footer');
		} else {
			$this->load->view('templates/header');
			$this->load->view('skck/laporan');
			$this->load->view('templates/footer');
		}

	}
}
