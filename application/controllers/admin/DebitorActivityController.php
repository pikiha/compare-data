<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DebitorActivityController extends CI_Controller {

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
		$debitor = $this->activity->selectallDebitur();
		$data = [
			'title' => 'Debitur Activity',
			'user' => $user,
			'debitor' => $debitor
		];

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/header_2');
		$this->load->view('backend/admin/debitor/index');
		$this->load->view('templates/footer');
	}

}