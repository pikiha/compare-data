<?php

class Auth extends CI_Model
{

    public function check_auth($email)
    {

        $query = $this->db->query("

            SELECT * FROM users WHERE email = '{$email}'")->row();
        return $query;
    }

    public function register($tabel, $data)
    {
        return $this->db->insert($tabel, $data);
    }

    public function isNotLogin()
    {
        return $this->session->userdata('user_logged') === NULL;
    }
}

?>