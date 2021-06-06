<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompareController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('activity');
		$this->load->helper('rupiah');
		$this->load->model('compare');
		$this->load->helper(array('download'));	
	}

	public function index()
	{
		$user = $this->session->userdata('email');
		$compare = $this->compare->getcompare();
		$data = [
			'title'	=> 'Compare Creditors&Debitors',
			'user'	=> $user,
			'compare' => $compare
		];

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/header_2');
		$this->load->view('backend/admin/compare/index');
		$this->load->view('templates/footer');
		
	}

	function download($document)
	{
		force_download('assets/document/'.$document, NULL);
	}

}