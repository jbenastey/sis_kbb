<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 5/28/2019
 * Time: 3:21 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratController extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Surat');
		if($this->session->has_userdata('session_id')==null){
			redirect('login');
		}
	}
	public function index() {
		$data['surat'] = $this->Surat->tampil_surat();


		$this->load->view('templates/header');
		$this->load->view('surat/index', $data);
		$this->load->view('templates/footer');
	}
	public function buat() {
		if (isset($_POST['simpan'])){

			$config['upload_path'] = './assets/upload/upload_gambar/';
			$config['allowed_types'] ='jpg|png|jpeg';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if(!$this->upload->do_upload('upload')){
				$error = array('error' =>$this->upload->display_errors());

				$this->session->set_flashdata('alert','gagal_upload_foto');
				redirect('surat');
				//var_dump($error);
			} else {
				$foto = $this->upload->data('file_name');
				$nomor_surat = $this->input->post('nomor_surat');
				$tanggal_surat = $this->input->post('tanggal_surat');
				$lampiran = $this->input->post('lampiran');
				$nomor_agenda = $this->input->post('nomor_agenda');
				$dari = $this->input->post('dari');
				$perihal = $this->input->post('perihal');
				$status = $this->input->post('status');
				$sifat = $this->input->post('sifat');
				$keterangan = "-";
				$data = array(
					'surat_nomor' => $nomor_surat,
					'surat_tanggal' => $tanggal_surat,
					'surat_lampiran' => $lampiran,
					'surat_nomoragenda' => $nomor_agenda,
					'surat_dari' => $dari,
					'surat_perihal' => $perihal,
					'surat_status' => $status,
					'surat_sifat' => $sifat,
					'surat_foto' =>  $foto,
					'surat_keterangan' => $keterangan
				);
				$simpan = $this->Surat->buat_surat($data);
				if ($simpan>0) {
					$this->session->set_flashdata('alert','berhasil_buat_surat');
					redirect('surat');
				}
				else{
					redirect('surat');
				}
			}


		}
	}

	public function lihat($id){
		$data['surat']=$this->Surat->lihat_surat($id);
		$this->load->view('templates/header');
		$this->load->view('surat/lihat', $data);
		$this->load->view('templates/footer');
	}

	public function hapus($id){
		$where = array('surat_id' => $id);
		$this->Surat->hapus_surat($where, 'surat');
		$this->session->set_flashdata('alert','berhasil_menghapus_surat');
		redirect('surat');
	}

	public function edit($id) {
		$where = array('surat_id' => $id);
		$data['surat'] =$this->Surat->edit_surat($where)->result();

		$this->load->view('templates/header');
		$this->load->view('surat/edit', $data);
		$this->load->view('templates/footer');
	}

	public function update($id) {

		$nomor_surat = $this->input->post('nomor_surat');
		$tanggal_surat = $this->input->post('tanggal_surat');
		$lampiran = $this->input->post('lampiran');
		$nomor_agenda = $this->input->post('nomor_agenda');
		$dari = $this->input->post('dari');
		$perihal = $this->input->post('perihal');
		$status = $this->input->post('status');
		$sifat = $this->input->post('sifat');
		$data = array(
			'surat_nomor' => $nomor_surat,
			'surat_tanggal' => $tanggal_surat,
			'surat_lampiran' => $lampiran,
			'surat_nomoragenda' => $nomor_agenda,
			'surat_dari' => $dari,
			'surat_perihal' => $perihal,
			'surat_status' => $status,
			'surat_sifat' => $sifat,
		);
		$where = array(
			'surat_id' => $id
		);
		$this->Surat->update_surat($where, $data,'surat');

		$this->session->set_flashdata('alert','berhasil_edit_surat');
		redirect('surat');
	}
//	public function disposisi($id){
//		$data['id']=$id;
//		if (isset($_POST['Kirim'])){
//			$tujuan=$this->input->post('tujuan_disposisi');
//			$catatan=$this->input->post('catatan');
//			$data_disposisi= array(
//				'surat_tujuan_disposisi' => $tujuan,
//				'surat_catatan' => $catatan,
//				'surat_disposisi' => 'Jawab'
//			);
//			$where = array(
//				'surat_id' => $id
//			);
//			$this->Surat->update_surat($where, $data_disposisi);
//
//			$this->session->set_flashdata('alert','berhasil_disposisi_surat');
//			redirect('surat');
//		}
//		$this->load->view('templates/header');
//		$this->load->view('surat/disposisi',$data);
//		$this->load->view('templates/footer');
//	}
//	public  function tampil_disposisi(){
//		$data['surat'] = $this->Surat->tampil_surat();
//
//		$this->load->view('templates/header');
//		$this->load->view('surat/tampil_disposisi',$data);
//		$this->load->view('templates/footer');
//	}
	public function tolak_surat(){
		$id = $this->input->post('id');
		$data_disposisi = array(
			'surat_disposisi' => 'Tolak',
			"surat_keterangan"=>$this->input->post('keterangan'),
		);

		$where = array(
			'surat_id' => $id
		);
		$this->Surat->update_surat($where, $data_disposisi);
		$this->session->set_flashdata('alert','berhasil_menolak_surat');
		redirect('surat');
	}
//	public function simpan_surat($id){
//		$data_disposisi = array(
//			'surat_disposisi' => 'Simpan'
//		);
//
//		$where = array(
//			'surat_id' => $id
//		);
//		$this->Surat->update_surat($where, $data_disposisi);
//		$this->session->set_flashdata('alert','berhasil_simpan_surat');
//		redirect('surat');
//	}
}
