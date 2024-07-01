<?php
require_once('application/models/core/SettingsModel.php');
class CampaignsModel extends SettingsModel
{
    public $table;
    public function __construct()
    {
        parent::__construct();
        $this->table = (in_array('registrations', $this->db->list_tables())? 'registrations': null);
    }

    public function get($columns){
        if($this->sanitize_absence($columns, $this->db->list_fields($this->table))){
            $this->db->distinct();
            $this->db->select($columns);
        }
        if(null !== $this->table){
            return json_encode($this->db->get($this->table)->result_array());
        } else {
            return json_encode(["ERROR"]);
        }
    }
}
