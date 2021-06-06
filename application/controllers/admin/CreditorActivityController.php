<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CreditorActivityController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('activity');
		$this->load->helper('rupiah');
	}

	public function index()
	{
		$user = $this->session->userdata('email');
		$creditor = $this->activity->selectall();
		$data = [
			'title' => 'Dashboard Admin',
			'creditor' => $creditor,
			'user'	=> $user

		];

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/header_2', $data);
		$this->load->view('backend/admin/kreditor/index');
		$this->load->view('templates/footer');

	}

}