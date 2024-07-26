<?php
class AuthController extends CI_Controller
{
    private $session_data;
    private $form_data;
    public function login()
    {
        $this->form_data['data'] = $this->input->post();
        $this->form_data['headers'] = $this->input->request_headers();
        $this->form_data['headers']['ip_address'] = $this->input->ip_address();
        echo "<pre>";
        print_r($this->form_data);
        echo "</pre>";
        $this->session_data = [
            'user' => [
                'username' => $this->form_data['data']['username'],
                'role' => 'admin'
            ]
        ];
        $this->session->set_userdata('ldm_appuser', $this->session_data);
        redirect('');
    }

    public function logout()
    {
        $this->session->unset_userdata('leadsmark_user');
        redirect('login');
    }
}
