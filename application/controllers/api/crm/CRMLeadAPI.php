<?php
require_once APPPATH . "controllers/APIController.php";
class CRMLeadAPI extends APIController
{
    public $version, $response, $request;
    public function __construct()
    {
        parent::__construct();
        $this->version = "6.0.1";
        $this->request = [];
        $this->response = [];
    }

    public function send_lead(){
        $form_data = json_decode($this->input->raw_input_stream, true)['data'];
        if (count($form_data) > 0) {
            $entry = $form_data[0];
            /* 
            // Database Entry Code
            $data = [
                "Last_Name" => $entry["Last_Name"],
                "Email" => $entry["Email"],
                "Mobile" => $entry["Mobile"],
                "Lead_Source" => $entry["Lead_Source"]??= "Website"
            ];
            $this->load->model("LeadsModel");
            $this->LeadsModel->new_from_api($data); 
            */
            return $this->output->set_output(json_encode($entry));
        } else {
            $this->response['data']['code'] = 'ERROR';
            $this->response['data']['details'] = 'Source Data Missing!';
        }
    }
}