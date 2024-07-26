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
        $this->response['data']['version']= $this->version;
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
            $output['code'] = "SUCCESS";
            $details['Modified_Time'] = date(DATE_ATOM);
            $details['Modified_By'] = [
                'name' => "",
                'id' => "",
            ];
            $details['Created_Time'] = date(DATE_ATOM);
            $details['Created_By'] = [
                'name' => "",
                'id' => "",
            ];
            $output['message'] = "record added";
            $output['status'] = "SUCCESS";
            $output['details'] = $details;
            $this->response['data'] = [$output];
            return $this->output->set_output(json_encode($this->response));
        } else {
            $this->response['data']['code'] = 'ERROR';
            $this->response['data']['details'] = 'Source Data Missing!';
        }
    }
}