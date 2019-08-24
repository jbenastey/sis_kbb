<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 5/27/2019
 * Time: 12:20 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model{
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
	}
	public function get_user($user)
	{
		return $this->db->get_where('dbsurat_user',$user);
	}
}
