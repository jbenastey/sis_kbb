<?php


class SkbController extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('SuratModel');
		if($this->session->has_userdata('session_id')==null){
			redirect('login');
		}
	}
	public function index() {
		$data['skb'] = $this->SuratModel->view_data('dbsurat_skb');

		$this->load->view('templates/header');
		$this->load->view('skb/index', $data);
		$this->load->view('templates/footer');
	}
	public function buat() {
		if (isset($_POST['simpan'])){
			$skb_nomor = $this->input->post('nomor_surat');
			$skb_nama = $this->input->post('nama_lengkap');
			$skb_tanggal_lahir = $this->input->post('tanggal_lahir');
			$skb_tempat_lahir = $this->input->post('tempat_lahir');
			$skb_wni = $this->input->post('kewarganegaraan');
			$skb_jk = $this->input->post('jenis_kelamin');
			$skb_agama = $this->input->post('agama');
			$skb_kerja = $this->input->post('pekerjaan');
			$skb_alamat = $this->input->post('alamat');
			$skb_jumlah_keluarga = $this->input->post('jumlah_keluarga');
			$detail_nama = $this->input->post('detail_nama');
			$detail_tempat = $this->input->post('detail_tempat');
			$detail_tanggal_lahir = $this->input->post('detail_tanggal_lahir');
			$detail_shdk = $this->input->post('detail_shdk');

			$cek = $this->SuratModel->view_data('dbsurat_skb');
			$endArray = end($cek);
//			$skb_id = '';
			if ($cek == null){
				$skb_id = 1;
			} else {
				$skb_id = $endArray['skb_id']+1;
			}
//			echo '<pre>';
//			var_dump($skb_id);die;
			for ($i = 0; $i < count($detail_nama);$i++){
				$data_detail = array(
					'detail_skb_id' => $skb_id,
					'detail_nama' => $detail_nama[$i],
					'detail_tempat' => $detail_tempat[$i],
					'detail_tanggal_lahir' => $detail_tanggal_lahir[$i],
					'detail_shdk' => $detail_shdk[$i],
				);
				$this->SuratModel->insert('dbsurat_skb_detail',$data_detail);
			}

			$data = array(
				'skb_nomor' => $skb_nomor,
				'skb_tanggal_lahir' => $skb_tanggal_lahir,
				'skb_nama' => $skb_nama,
				'skb_tempat_lahir' => $skb_tempat_lahir,
				'skb_wni' => $skb_wni,
				'skb_jk' => $skb_jk,
				'skb_agama' => $skb_agama,
				'skb_kerja' =>  $skb_kerja,
				'skb_alamat' => $skb_alamat,
				'skb_jumlahkeluarga' => $skb_jumlah_keluarga,
			);
			$simpan = $this->SuratModel->insert('dbsurat_skb',$data);
			if ($simpan>0) {
				$this->session->set_flashdata('alert','berhasil_buat_surat');
				redirect('skb');
			}
			else{
				redirect('skb');
			}
		}


	}
	public function lihat($id){
		$data = array(
			'skb' => $this->SuratModel->view_data_by_id($id,'skb_id','dbsurat_skb'),
			'skb_detail' => $this->SuratModel->view_data_skb_by_id($id)
		);

		$this->load->view('templates/header');
		$this->load->view('skb/lihat', $data);
		$this->load->view('templates/footer');
	}
	public function hapus($id){
		$this->SuratModel->delete('skb_id',$id,'dbsurat_skb');
		$this->session->set_flashdata('alert','berhasil_menghapus_surat');
		redirect('skb');
	}
	public function edit($id) {
		$where = array('skb_id' => $id);
		$data['skb'] =$this->SuratModel->edit_skb($where)->result();
		$data['skb_detail'] = $this->SuratModel->view_skb_detail($id);

		$this->load->view('templates/header');
		$this->load->view('skb/edit', $data);
		$this->load->view('templates/footer');
	}

	public function update($id) {
		$data['skb_detail'] = $this->SuratModel->view_skb_detail($id);

		$skb_nomor = $this->input->post('nomor_surat');
		$skb_nama = $this->input->post('nama_lengkap');
		$skb_tanggal_lahir = $this->input->post('tanggal_lahir');
		$skb_tempat_lahir = $this->input->post('tempat_lahir');
		$skb_wni = $this->input->post('kewarganegaraan');
		$skb_jk = $this->input->post('jenis_kelamin');
		$skb_agama = $this->input->post('agama');
		$skb_kerja = $this->input->post('pekerjaan');
		$skb_alamat = $this->input->post('alamat');
		$skb_jumlah_keluarga = $this->input->post('jumlah_keluarga');

		$detail_id = $this->input->post('detail_id');
		$detail_nama = $this->input->post('detail_nama');
		$detail_tempat = $this->input->post('detail_tempat');
		$detail_tanggal_lahir = $this->input->post('detail_tanggal_lahir');
		$detail_shdk = $this->input->post('detail_shdk');

//			echo '<pre>';
//			var_dump($skb_id);die;
		for ($i = 0; $i < count($detail_nama);$i++){
			$data_detail = array(
				'detail_nama' => $detail_nama[$i],
				'detail_tempat' => $detail_tempat[$i],
				'detail_tanggal_lahir' => $detail_tanggal_lahir[$i],
				'detail_shdk' => $detail_shdk[$i],
			);
			$this->SuratModel->update('detail_id',$detail_id,'dbsurat_skb_detail',$data_detail);
		}

		$data = array(
			'skb_nomor' => $skb_nomor,
			'skb_tanggal_lahir' => $skb_tanggal_lahir,
			'skb_nama' => $skb_nama,
			'skb_tempat_lahir' => $skb_tempat_lahir,
			'skb_wni' => $skb_wni,
			'skb_jk' => $skb_jk,
			'skb_agama' => $skb_agama,
			'skb_kerja' =>  $skb_kerja,
			'skb_alamat' => $skb_alamat,
			'skb_jumlahkeluarga' => $skb_jumlah_keluarga,
		);

		$this->SuratModel->update('skb_id',$id,'dbsurat_skb',$data);

		$this->session->set_flashdata('alert','berhasil_edit_skb');
		redirect('skb');
	}
	public function setujui_skb($id){
		$data_disposisi = array(
			'skb_disposisi' => 'Setuju',
		);

		$this->SuratModel->update('skb_id',$id,'dbsurat_skb',$data_disposisi);
		$this->session->set_flashdata('alert','berhasil_menyetujui_surat');
		redirect('skb');
	}

	public function cetak($id){
		$data = array(
			'skb' => $this->SuratModel->view_data_by_id($id,'skb_id','dbsurat_skb'),
			'skb_detail' => $this->SuratModel->view_data_skb_by_id($id)
		);

		$this->load->view('templates/header');
		$this->load->view('skb/cetak', $data);
		$this->load->view('templates/footer');
	}
	public function laporan(){
		if (isset($_POST['lihat'])){
			$tanggal1 = $this->input->post('tanggal1');
			$tanggal2 = $this->input->post('tanggal2');

			$data['laporan'] = $this->SuratModel->view_laporan('dbsurat_skb','skb_tanggal',$tanggal1,$tanggal2);
			$data['tanggal1'] = $tanggal1;
			$data['tanggal2'] = $tanggal2;
			$this->load->view('templates/header');
			$this->load->view('skb/arsip',$data);
			$this->load->view('templates/footer');
		} else {
			$this->load->view('templates/header');
			$this->load->view('skb/laporan');
			$this->load->view('templates/footer');
		}

	}
}
