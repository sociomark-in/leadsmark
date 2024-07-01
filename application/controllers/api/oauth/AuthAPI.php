<?php
require_once APPPATH . "controllers/APIController.php";
class AuthAPI extends APIController
{
    public $version, $response, $request;
    public function __construct()
    {
        parent::__construct();
        $this->version = "6.0.1";
        $this->request = [];
        $this->response = [];
    }

    public function token_auth(){
        $client_id = $this->input->get("client_id");
        $client_secret = $this->input->get("client_secret");
        $grant_type = $this->input->get("grant_type");

        if(is_null($client_id) || is_null($client_secret) || is_null($grant_type)){
            $this->response['data']['code'] = 'ERROR';
            $this->response['data']['detail'] = 'ERROR';
        } else {
            $refresh_token = null;
            switch ($grant_type) {
                case 'refresh_token':
                    $refresh_token = $this->input->get("refresh_token");
                    if(!is_null($refresh_token)){
                        $this->response['data']['code'] = 'SUCCESS';
                        $this->response['data']['access_token'] = '10000.1D2thT7mIebn6MwmIA668ChMLnKXwqNT';
                        $this->response['data']['scope'] = 'LeadsMark.modules.all';
                        $this->response['data']['origin_domain'] = base_url('crm/v6/leads');
                        $this->response['data']['token_type'] = 'Bearer Token';
                        $this->response['data']['expires_in'] = '36000';
                    } else {
                        $this->response['data']['code'] = 'ERROR';
                    }
                    break;
                
                default:
                    # code...
                    break;
            }

        }



        return $this->output->set_output(json_encode($this->response));
    }
}
