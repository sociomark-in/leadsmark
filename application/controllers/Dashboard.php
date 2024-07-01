<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */

    public function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['leadsmark_user'])) {
            redirect(base_url('login'));
        }
    }
    public function index()
    {
        $this->load->model('data/CampaignsModel', 'CampaignsModel');
        $this->load->model('data/VisualizationModel', 'VisualizationModel');
        // echo "<pre>";
        // print_r(json_decode($this->CampaignsModel->get(['utm_source','utm_medium','utm_campaign']), true));
        // echo "</pre>";
        $data = [
            'page' => [
                'title' => "Dashboard" . " • " . APP_NAME
            ],
            'charts' => [
                'line' => [
                    'growth' => $this->VisualizationModel->load('line')
                ],
                'bar' => [
                    'orders' => $this->VisualizationModel->load('bar')
                ]
            ]
        ];
        $this->load->admin_dashboard('dashboard/index', $data);
    }

    public function all_leads()
    {
        $this->load->model('data/LeadsModel', 'LeadsModel');
        // echo "<pre>";
        // print_r(json_decode($this->LeadsModel->get(null), true));
        // echo "</pre>";
        // die;
        $data = [
            'page' => [
                'title' => "All Leads" . " • " . APP_NAME
            ],
            'data' => json_decode($this->LeadsModel->get(null), true)
        ];
        $this->load->admin_dashboard('dashboard/leads/home', $data);
    }

    public function login()
    {
        $data = [
            'page' => [
                'title' => "Login Page" . " • " . APP_NAME
            ]
        ];
        $this->load->view('pages/login', $data);
    }
    public function register()
    {
    }
}
