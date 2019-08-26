<?php


class PPakController extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('SuratModel');
		if($this->session->has_userdata('session_id')==null){
			redirect('login');
		}
	}
	public function index() {
		$data['ppak'] = $this->SuratModel->view_data('dbsurat_ppak');

		$this->load->view('templates/header');
		$this->load->view('ppak/index', $data);
		$this->load->view('templates/footer');
	}
	public function buat() {
		if (isset($_POST['simpan'])){
			$ppak_nomor = $this->input->post('nomor_surat');
			$ppak_nokk = $this->input->post('nomor_kk');
			$ppak_namakepala = $this->input->post('kepala_keluarga');
			$ppak_alamat_sekarang = $this->input->post('alamat_sekarang');
			$ppak_alamat_tujuan = $this->input->post('alamat_tujuan');
			$ppak_alasanpindah = $this->input->post('alasan_pindah');
			$ppak_jenispindah = $this->input->post('jenis_pindah');
			$ppak_statuskkpindah = $this->input->post('status_kkpindah');
			$ppak_statuskktidakpindah = $this->input->post('status_kktidakpindah');
			$ppak_jumlah_pindah = $this->input->post('jumlah_pindah');

			$detail_nama = $this->input->post('detail_nama');
			$detail_nik = $this->input->post('detail_nik');
			$detail_tempat = $this->input->post('detail_tempat');
			$detail_tanggal_lahir = $this->input->post('detail_tanggal_lahir');
			$detail_shdk = $this->input->post('detail_shdk');

			$cek = $this->SuratModel->view_data('dbsurat_ppak');
			$endArray = end($cek);
//			$skb_id = '';
			if ($cek == null){
				$ppak_id = 1;
			} else {
				$ppak_id = $endArray['ppak_id']+1;
			}
//			echo '<pre>';
//			var_dump($skb_id);die;
			for ($i = 0; $i < count($detail_nama);$i++){
				$data_detail = array(
					'detail_ppak_id' => $ppak_id,
					'detail_nama' => $detail_nama[$i],
					'detail_nik' => $detail_nik[$i],
					'detail_tempat_lahir' => $detail_tempat[$i],
					'detail_tanggal_lahir' => $detail_tanggal_lahir[$i],
					'detail_shdk' => $detail_shdk[$i],
				);
				$this->SuratModel->insert('dbsurat_ppak_detail',$data_detail);
			}


			$data = array(
				'ppak_nomor' => $ppak_nomor,
				'ppak_nokk' => $ppak_nokk,
				'ppak_namakepala' => $ppak_namakepala,
				'ppak_alamat_sekarang' => $ppak_alamat_sekarang,
				'ppak_alamat_tujuan' => $ppak_alamat_tujuan,
				'ppak_alasanpindah' => $ppak_alasanpindah,
				'ppak_jenispindah' => $ppak_jenispindah,
				'ppak_statuskkpindah' =>  $ppak_statuskkpindah,
				'ppak_statuskktidakpindah' => $ppak_statuskktidakpindah,
				'ppak_jumlah_pindah' => $ppak_jumlah_pindah,
			);
			$simpan = $this->SuratModel->insert('dbsurat_ppak',$data);
			if ($simpan>0) {
				$this->session->set_flashdata('alert','berhasil_buat_surat');
				redirect('ppak');
			}
			else{
				redirect('ppak');
			}
		}


	}
	public function lihat($id){
		$data = array(
			'ppak' => $this->SuratModel->view_data_by_id($id,'ppak_id','dbsurat_ppak'),
			'ppak_detail' => $this->SuratModel->view_data_ppak_by_id($id)
		);

		$this->load->view('templates/header');
		$this->load->view('ppak/lihat', $data);
		$this->load->view('templates/footer');
	}
	public function hapus($id){
		$this->SuratModel->delete('ppak_id',$id,'dbsurat_ppak');
		$this->session->set_flashdata('alert','berhasil_menghapus_surat');
		redirect('ppak');
	}
	public function edit($id) {
		$where = array('ppak_id' => $id);
		$data['ppak'] =$this->SuratModel->edit_ppak($where)->result();
		$data['ppak_detail'] = $this->SuratModel->view_ppak_detail($id);

		$this->load->view('templates/header');
		$this->load->view('ppak/edit', $data);
		$this->load->view('templates/footer');
	}
	public function update($id) {
		$ppak_nomor = $this->input->post('nomor_surat');
		$ppak_nokk = $this->input->post('nomor_kk');
		$ppak_namakepala = $this->input->post('kepala_keluarga');
		$ppak_alamat_sekarang = $this->input->post('alamat_sekarang');
		$ppak_alamat_tujuan = $this->input->post('alamat_tujuan');
		$ppak_alasanpindah = $this->input->post('alasan_pindah');
		$ppak_jenispindah = $this->input->post('jenis_pindah');
		$ppak_statuskkpindah = $this->input->post('status_kkpindah');
		$ppak_statuskktidakpindah = $this->input->post('status_kktidakpindah');
		$ppak_jumlah_pindah = $this->input->post('jumlah_pindah');

		$detail_id = $this->input->post('detail_id');
		$detail_nama = $this->input->post('detail_nama');
		$detail_nik = $this->input->post('detail_nik');
		$detail_tempat = $this->input->post('detail_tempat');
		$detail_tanggal_lahir = $this->input->post('detail_tanggal_lahir');
		$detail_shdk = $this->input->post('detail_shdk');

		for ($i = 0; $i < count($detail_nama);$i++){
			$data_detail = array(
				'detail_nama' => $detail_nama[$i],
				'detail_nik' => $detail_nik[$i],
				'detail_tempat_lahir' => $detail_tempat[$i],
				'detail_tanggal_lahir' => $detail_tanggal_lahir[$i],
				'detail_shdk' => $detail_shdk[$i],
			);
			$this->SuratModel->update('detail_id',$detail_id,'dbsurat_ppak_detail',$data_detail);
		}


		$data = array(
			'ppak_nomor' => $ppak_nomor,
			'ppak_nokk' => $ppak_nokk,
			'ppak_namakepala' => $ppak_namakepala,
			'ppak_alamat_sekarang' => $ppak_alamat_sekarang,
			'ppak_alamat_tujuan' => $ppak_alamat_tujuan,
			'ppak_alasanpindah' => $ppak_alasanpindah,
			'ppak_jenispindah' => $ppak_jenispindah,
			'ppak_statuskkpindah' =>  $ppak_statuskkpindah,
			'ppak_statuskktidakpindah' => $ppak_statuskktidakpindah,
			'ppak_jumlah_pindah' => $ppak_jumlah_pindah,
		);

		$this->SuratModel->update('ppak_id',$id,'dbsurat_ppak',$data);

		$this->session->set_flashdata('alert','berhasil_edit_skb');
		redirect('ppak');
	}
	public function setujui_ppak($id){
		$data_disposisi = array(
			'ppak_disposisi' => 'Setuju',
		);

		$this->SuratModel->update('ppak_id',$id,'dbsurat_ppak',$data_disposisi);
		$this->session->set_flashdata('alert','berhasil_menyetujui_surat');
		redirect('ppak');
	}

	public function cetak($id){
		$data = array(
			'ppak' => $this->SuratModel->view_data_by_id($id,'ppak_id','dbsurat_ppak'),
			'ppak_detail' => $this->SuratModel->view_data_ppak_by_id($id)
		);

		$this->load->view('templates/header');
		$this->load->view('ppak/cetak', $data);
		$this->load->view('templates/footer');
	}
	public function laporan(){
		if (isset($_POST['lihat'])){
			$tanggal1 = $this->input->post('tanggal1');
			$tanggal2 = $this->input->post('tanggal2');

			$data['laporan'] = $this->SuratModel->view_laporan('dbsurat_ppak','ppak_tanggal',$tanggal1,$tanggal2);
			$data['tanggal1'] = $tanggal1;
			$data['tanggal2'] = $tanggal2;
			$this->load->view('templates/header');
			$this->load->view('ppak/arsip',$data);
			$this->load->view('templates/footer');
		} else {
			$this->load->view('templates/header');
			$this->load->view('ppak/laporan');
			$this->load->view('templates/footer');
		}

	}
}
