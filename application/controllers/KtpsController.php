<?php


class KtpsController extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('SuratModel');
		if($this->session->has_userdata('session_id')==null){
			redirect('login');
		}
	}
	public function index() {
		$data['ktps'] = $this->SuratModel->view_data('dbsurat_ktps');

		$this->load->view('templates/header');
		$this->load->view('ktps/index', $data);
		$this->load->view('templates/footer');
	}
	public function buat() {
		if (isset($_POST['simpan'])){
			$ktps_nomor = $this->input->post('nomor_surat');
			$ktps_nama = $this->input->post('nama_lengkap');
			$ktps_tanggal_lahir = $this->input->post('tanggal_lahir');
			$ktps_tempat_lahir = $this->input->post('tempat_lahir');
			$ktps_wni = $this->input->post('kewarganegaraan');
			$ktps_jk = $this->input->post('jenis_kelamin');
			$ktps_agama = $this->input->post('agama');
			$ktps_kerja = $this->input->post('pekerjaan');
			$ktps_status = $this->input->post('status');
			$ktps_nik = $this->input->post('nik');
			$ktps_alamat = $this->input->post('alamat');
			$data = array(
				'ktps_nomor' => $ktps_nomor,
				'ktps_tanggal_lahir' => $ktps_tanggal_lahir,
				'ktps_nama' => $ktps_nama,
				'ktps_tempat_lahir' => $ktps_tempat_lahir,
				'ktps_wni' => $ktps_wni,
				'ktps_jk' => $ktps_jk,
				'ktps_agama' => $ktps_agama,
				'ktps_kerja' =>  $ktps_kerja,
				'ktps_status' => $ktps_status,
				'ktps_nik' => $ktps_nik,
				'ktps_alamat' => $ktps_alamat,
			);
			$simpan = $this->SuratModel->insert('dbsurat_ktps',$data);
			if ($simpan>0) {
				$this->session->set_flashdata('alert','berhasil_buat_surat');
				redirect('ktps');
			}
			else{
				redirect('ktps');
			}
		}


	}
	public function lihat($id){
		$data = array(
			'ktps' => $this->SuratModel->view_data_by_id($id,'ktps_id','dbsurat_ktps'),
			'ktps_detail' => $this->SuratModel->view_data_ktps_by_id($id)
		);

		$this->load->view('templates/header');
		$this->load->view('ktps/lihat', $data);
		$this->load->view('templates/footer');
	}
	public function hapus($id){
		$this->SuratModel->delete('ktps_id',$id,'dbsurat_ktps');
		$this->session->set_flashdata('alert','berhasil_menghapus_surat');
		redirect('ktps');
	}
	public function edit($id) {
		$where = array('ktps_id' => $id);
		$data['ktps'] =$this->SuratModel->edit_ktps($where)->result();

		$this->load->view('templates/header');
		$this->load->view('ktps/edit', $data);
		$this->load->view('templates/footer');
	}

	public function update($id) {
		$ktps_nomor = $this->input->post('nomor_surat');
		$ktps_nama = $this->input->post('nama_lengkap');
		$ktps_tanggal_lahir = $this->input->post('tanggal_lahir');
		$ktps_tempat_lahir = $this->input->post('tempat_lahir');
		$ktps_wni = $this->input->post('kewarganegaraan');
		$ktps_jk = $this->input->post('jenis_kelamin');
		$ktps_agama = $this->input->post('agama');
		$ktps_kerja = $this->input->post('pekerjaan');
		$ktps_status = $this->input->post('status');
		$ktps_nik = $this->input->post('nik');
		$ktps_alamat = $this->input->post('alamat');
		$data = array(
			'ktps_nomor' => $ktps_nomor,
			'ktps_tanggal_lahir' => $ktps_tanggal_lahir,
			'ktps_nama' => $ktps_nama,
			'ktps_tempat_lahir' => $ktps_tempat_lahir,
			'ktps_wni' => $ktps_wni,
			'ktps_jk' => $ktps_jk,
			'ktps_agama' => $ktps_agama,
			'ktps_kerja' =>  $ktps_kerja,
			'ktps_status' => $ktps_status,
			'ktps_nik' => $ktps_nik,
			'ktps_alamat' => $ktps_alamat,
		);
//		$where = array(
//			'ktps_id' => $id
//		);
		$this->SuratModel->update('ktps_id',$id,'dbsurat_ktps',$data);

		$this->session->set_flashdata('alert','berhasil_edit_ktps');
		redirect('ktps');
	}
	public function setuju_surat(){
		$id = $this->input->post('id');
		$data_disposisi = array(
			'ktps_disposisi' => 'Setuju',
		);

		$this->SuratModel->update('ktps_id',$id,'dbsurat_ktps',$data_disposisi);
		$this->session->set_flashdata('alert','berhasil_menyetujui_surat');
		redirect('surat');
	}

	public function cetak($id){
		$data = array(
			'ktps' => $this->SuratModel->view_data_by_id($id,'ktps_id','dbsurat_ktps'),
			'ktps_detail' => $this->SuratModel->view_data_ktps_by_id($id)
		);

		$this->load->view('templates/header');
		$this->load->view('ktps/cetak', $data);
		$this->load->view('templates/footer');
	}
	public function laporan(){
		if (isset($_POST['lihat'])){
			$tanggal1 = $this->input->post('tanggal1');
			$tanggal2 = $this->input->post('tanggal2');

			$data['laporan'] = $this->SuratModel->view_laporan('dbsurat_ktps','ktps_tanggal',$tanggal1,$tanggal2);
			$data['tanggal1'] = $tanggal1;
			$data['tanggal2'] = $tanggal2;
			$this->load->view('templates/header');
			$this->load->view('ktps/arsip',$data);
			$this->load->view('templates/footer');
		} else {
			$this->load->view('templates/header');
			$this->load->view('ktps/laporan');
			$this->load->view('templates/footer');
		}

	}
}
