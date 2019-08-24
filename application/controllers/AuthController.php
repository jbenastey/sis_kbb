<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 5/27/2019
 * Time: 12:19 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$model = array('User');
		$this->load->model($model);

	}
	public function login()
	{

		if($this->session->has_userdata('session_id')){
			$this->session->flashdata('alert','sudah_login');
			redirect(base_url());
		}

	if (isset($_POST['login'])){

		$username=$this->input->post('username');
		$password=$this->input->post('password');

		$user = array(
			'username' => $username,
			'password' => md5($password)
		);

		$validate = $this->User->get_user($user)->num_rows();
		$admin = $this->User->get_user($user)->row_array();
		$idUser = $admin['user_id'];
		$levelUser = $admin['user_level'];
		$nama_user = $admin['username'];

		if ($validate >0) {
			$data_session = array(
				'session_id' => $idUser,
				'session_level' => $levelUser,
				'session_username' => $nama_user
			);
			$this->session->set_flashdata('alert','LoginSukses');
			$this->session->set_userdata($data_session);
			redirect(base_url());
		}else
			{
				$this->session->set_flashdata('alert','GagalLogin');
			redirect(base_url('login'));
		}
	}
	$this->load->view('auth/login');

	}
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

}
