<?php
class Auth extends CI_Controller
{
    public $session_data;
    public function login(){
        $this->session_data = [
            'user' => [
                'username' => 'admin'
            ]
            ];
        $this->session->set_userdata('leadsmark_user', $this->session_data);
        redirect('');
    }

    public function logout(){
        $this->session->unset_userdata('leadsmark_user');
        redirect('login');
    }
}
