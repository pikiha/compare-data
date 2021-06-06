<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('auth');
		$this->load->model('activity');
		$this->load->helper('rupiah');
		if($this->auth->isNotLogin()) redirect(site_url('AuthController'));
	}

	public function index()
	{
		$level = $this->session->userdata('level');
		$user = $this->session->userdata('email');
		if ($level == 1) {
			$creditor =  $this->activity->selectall();
			$debitor = $this->activity->selectallDebitur();
			$coundebitor = $this->activity->count('activity_debitur', $debitor);
			$councreditor = $this->activity->count('activity', $creditor);
			$data = [
				'title' => 'Welcome',
				'user'	=> $user,
				'councreditor' => $councreditor,
				'coundebitor' => $coundebitor,
				'creditor'	=> $creditor
			];

			// var_dump($level);
			// die();

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/header_2');
			$this->load->view('backend/dashboard');
			$this->load->view('templates/footer');

		}
		if ($level == 2) {
			$activity = $this->activity->selectall();
			$data = [
				'title' => 'Welcome',
				'user'	=> $user,
				'activity' => $activity
			];

			// var_dump($activity);
			// die();

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/header_2');
			$this->load->view('backend/dashboard');
			$this->load->view('templates/footer');

		} else {
			if ($level == 3) {
				$data = [
					'title' => 'Welcome',
					'user'	=> $user
				];

				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar');
				$this->load->view('templates/header_2');
				$this->load->view('backend/dashboard');
				$this->load->view('templates/footer');
			}
			
		}
	}


}