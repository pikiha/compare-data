<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth');
        $this->load->library('form_validation');
        $this->load->library('session');
    }


    public function index()
    {   
        $today = date('Y');
    	$data = [
    		'title' => 'Form Login',
            'today' => $today
    	];

        $this->load->view('templates/header',$data); 
    	$this->load->view('auth/index');

    }


    function auth_proses()
    {
     $this->form_validation->set_rules('email', 'Email', 'required');
     $this->form_validation->set_rules('password', 'Password', 'required');

     if ($this->form_validation->run() == FALSE) {

        $errors = $this->form_validation->error_array();
        $this->session->set_flashdata('errors', $errors);
        $this->session->set_flashdata('input', $this->input->post());
        redirect('AuthController');

    } else {

        $email = htmlspecialchars($this->input->post('email'));
        $pass = htmlspecialchars($this->input->post('password')); 
        $auth = $this->auth->check_auth($email);

//jika email tidak terdaftar
        if($auth == FALSE)
        {
            $this->session->set_flashdata('allert', 'email_salah');
            redirect('AuthController');
        } else {
//jika email terdaftar
            if(password_verify($pass, $auth->password)){
                $this->session->set_userdata(['user_logged' => $auth]);
                $this->session->set_userdata('id_user', $auth->id_user);
                $this->session->set_userdata('email', $auth->email);
                $this->session->set_userdata('level', $auth->level); 
                $role_user = $this->session->userdata('level');
                {
                    redirect('back/DashboardController');
                }   
            } else {
//jika email atau password salah
                $this->session->set_flashdata('allert', 'email_pass_salah');
                redirect('AuthController');

            }
        }
    }
}

        public function register()
        {
            $data = [
                'title' => 'Register'
            ];

            $this->load->view('templates/header',$data);
            $this->load->view('auth/register', $data);
        }


        function register_proses()
        {
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|trim');

            if($this->form_validation->run() == FALSE) {
                $errors = $this->form_validation->error_array();
                $this->session->set_flashdata('errors', $errors);
                $this->session->set_flashdata('input', $this->input->post());
                redirect('AuthController/register');
            } else {

                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $pass = password_hash($password, PASSWORD_DEFAULT);
                $level = $this->input->post('level');
                //jika check box pada view register null level users
                if ($level == NULL) {
                    
                  $data = [
                        'email' => $email,
                        'password' => $pass,
                        'level' => 3
                    ];

                } else {
                //jika check box pada view register null level super users
                    $data = [
                    'email' => $email,
                    'password' => $pass,
                    'level' => 2
                ];

                }

                // var_dump($data);
                // die();

                $insert = $this->auth->register("users", $data);
                if ($insert) {
                     $this->session->set_flashdata('allert', 'register_success');
                    redirect('AuthController');
                }

            }

        }


        public function logout()
        {
            $this->session->sess_destroy();
            echo '<script>
            alert("Sukses! Anda berhasil logout."); 
            window.location.href="'.base_url('AuthController').'";
            </script>';
        }


}
