<?php


class DashboardController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$model = array('SuratModel');
		$this->load->model($model);
		if($this->session->has_userdata('session_id')==null){
			redirect('login');
		}
	}

	public function index()
	{
		$skck = count($this->SuratModel->view_data('dbsurat_skck'));
		$ktps = count($this->SuratModel->view_data('dbsurat_ktps'));
		$ppak = count($this->SuratModel->view_data('dbsurat_ppak'));
		$skb = count($this->SuratModel->view_data('dbsurat_skb'));
		$skh = count($this->SuratModel->view_data('dbsurat_skh'));
		$skkn = count($this->SuratModel->view_data('dbsurat_skkn'));
		$skpn = count($this->SuratModel->view_data('dbsurat_skpn'));
		$sktk = count($this->SuratModel->view_data('dbsurat_sktk'));
		$sku = count($this->SuratModel->view_data('dbsurat_sku'));
		$spbpn = count($this->SuratModel->view_data('dbsurat_spbpn'));

		$setuju_skck = count($this->SuratModel->total_setuju('dbsurat_skck','skck_disposisi'));
		$setuju_ktps = count($this->SuratModel->total_setuju('dbsurat_ktps','ktps_disposisi'));
		$setuju_ppak = count($this->SuratModel->total_setuju('dbsurat_ppak','ppak_disposisi'));
		$setuju_skb = count($this->SuratModel->total_setuju('dbsurat_skb','skb_disposisi'));
		$setuju_skh = count($this->SuratModel->total_setuju('dbsurat_skh','skh_disposisi'));
		$setuju_skkn = count($this->SuratModel->total_setuju('dbsurat_skkn','skkn_disposisi'));
		$setuju_skpn = count($this->SuratModel->total_setuju('dbsurat_skpn','skpn_disposisi'));
		$setuju_sktk = count($this->SuratModel->total_setuju('dbsurat_sktk','sktk_disposisi'));
		$setuju_sku = count($this->SuratModel->total_setuju('dbsurat_sku','sku_disposisi'));
		$setuju_spbpn = count($this->SuratModel->total_setuju('dbsurat_spbpn','spbpn_disposisi'));

		$totalSurat = $skck+$ktps+$ppak+$skb+$skh+$skkn+$skpn+$sktk+$sku+$spbpn;
		$totalSetuju = $setuju_skck+$setuju_ktps+$setuju_ppak+$setuju_skb+$setuju_skh+$setuju_skkn+$setuju_skpn+$setuju_sktk+$setuju_sku+$setuju_spbpn;
		$data = array(
			'surat_masuk' => $totalSurat,
		//	'surat_keluar' => $this->SuratKeluar->total_surat(),
			'surat_setuju' => $totalSetuju,
			'surat_belum' => $totalSurat-$totalSetuju,
		//	'surat_keluar_ditolak' => $this->SuratKeluar->total_surat_tolak(),
		//	'surat_keluar_setuju' => $this->SuratKeluar->total_surat_setuju(),


	);
		$this->load->view('templates/header');
		$this->load->view('dashboard/index',$data);
		$this->load->view('templates/footer');
	}
}
