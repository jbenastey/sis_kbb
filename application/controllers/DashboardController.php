<?php


class DashboardController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$model = array('Surat');
		$this->load->model($model);
		if($this->session->has_userdata('session_id')==null){
			redirect('login');
		}
	}

	public function index()
	{
		$data = array(
			'surat_masuk' => $this->Surat->total_surat(),
		//	'surat_keluar' => $this->SuratKeluar->total_surat(),
//			'surat_setuju' => $this->Surat->total_surat_setuju(),
//			'surat_ditolak' => $this->Surat->total_surat_tolak(),
		//	'surat_keluar_ditolak' => $this->SuratKeluar->total_surat_tolak(),
		//	'surat_keluar_setuju' => $this->SuratKeluar->total_surat_setuju(),


	);
		$this->load->view('templates/header');
		$this->load->view('dashboard/index',$data);
		$this->load->view('templates/footer');
	}
}
