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
		$activity = $this->activity->selectall();
		$user = $this->session->userdata('email');	
		$data = [
			'title' => 'Creditors Activity',
			'user'	=> $user,
			'activity' => $activity
		];

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/header_2', $data);
		$this->load->view('backend/activity/creditoractivity');
		$this->load->view('templates/footer');
		
	}

}