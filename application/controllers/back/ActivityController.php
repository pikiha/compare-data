<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ActivityController extends CI_Controller {

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
		$level = $this->session->userdata('level');
		if ($level == 2) {
			$activity = $this->activity->selectallDebitur();
			$user = $this->session->userdata('email');	
			$data = [
				'title' => 'My Activity',
				'user'	=> $user,
				'activity' => $activity
			];

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/header_2', $data);
			$this->load->view('backend/activity/index');
			$this->load->view('templates/footer');
		} else {
			if ($level == 3) {
				$activity = $this->activity->selectall();
				$user = $this->session->userdata('email');	
				$data = [
					'title' => 'Your Activity',
					'user'	=> $user,
					'activity' => $activity
				];

				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar');
				$this->load->view('templates/header_2', $data);
				$this->load->view('backend/activity/index');
				$this->load->view('templates/footer');
			}
		}
	}

	function store()
	{
		$id = $this->session->userdata('id_user');
		$today = date('Y:m:d');
		$file1 = '';
		$file2 = '';
		$file3 = '';
		$file4 = '';
		$file5 = '';
		$firstname = $this->input->post('firstname');
		$lastname	= $this->input->post('lastname');
		$email     = $this->input->post('email');
		$phone		= $this->input->post('phone');
		$address	= $this->input->post('address');
		$total_k	= $this->input->post('total_k');
		$config['upload_path']          = './assets/document/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg|pdf|xls|xlsx|xlsb|xlsm|txt|docx';
		$config['max_size']             = 0;
		$config['max_width']            = 0;
		$config['max_height']           = 0;
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('file1')) {
			$fileData = $this->upload->data();
			$file1 = $fileData['file_name'];
		} 


		if ($this->upload->do_upload('file2')) {
			$fileData = $this->upload->data();
			$file2 = $fileData['file_name'];
		} 

		if ($this->upload->do_upload('file3')) {
			$fileData = $this->upload->data();
			$file3 = $fileData['file_name'];
		} 

		if ($this->upload->do_upload('file4')) {
			$fileData = $this->upload->data();
			$file4 = $fileData['file_name'];
		} 

		if ($this->upload->do_upload('file5')) {
			$fileData = $this->upload->data();
			$file5 = $fileData['file_name'];
		} 

		$calculate = 10000000/$total_k;
		$percent = $calculate*100;
		$proof = "DL-" . $this->generateRandomString(6). "";
		$data = array(
			'user_id'	=> $id,
			'firstname' => $firstname,
			'lastname'	=> $lastname,
			'email'		=> $email,
			'phone'		=> $phone,
			'address'	=> $address,
			'file1' => $file1,
			'file2'	=> $file2,
			'file3'	=> $file3,
			'file4'	=> $file4,
			'file5'	=> $file5,
			'date' => $today,
			'total_k' => $total_k,
			'percent_k' => $percent,
			'proof_id' => $proof
		);

		$insert = $this->activity->store('activity',$data);
		if($insert){
			$this->session->set_flashdata('allert', 'success_insert');
		}else{
			$this->session->set_flashdata('allert', 'failed_insert');
		}
		redirect('back/DashboardController');

	}

	function storesuperuser()
	{
		$id 	 = $this->session->userdata('id_user');
		$id_user = $this->input->post('user_id');
		$jenis	 = $this->input->post('jenis');
		$total	 = $this->input->post('total');
		$calculate = 10000000/$total;
		$percent = $calculate*100;

		$data = array(
			'user_id'		   => $id,
			'user_id_kreditur' => $id_user,
			'jenis'	  		   => $jenis,
			'total'	  		   => $total,
			'percent'		   => $percent
		);

		$insert = $this->activity->store('activity_debitur',$data);
		if($insert){
			$this->session->set_flashdata('allert', 'success_insert');
		}else{
			$this->session->set_flashdata('allert', 'failed_insert');
		}
		redirect('back/DashboardController');

	}


	function generateRandomString($length = 10) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}

}