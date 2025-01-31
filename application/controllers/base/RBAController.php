<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "controllers/base/BaseController.php";
class RBAController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->has_userdata($this->APP_ID . "_appuser")){
            redirect('login');
        }
        $this->data['session'] = $this->session->get_userdata($this->APP_ID . "_appuser");
        $this->data['session']['appuser'] = $_SESSION[$this->APP_ID . "_appuser"];
    }
}
