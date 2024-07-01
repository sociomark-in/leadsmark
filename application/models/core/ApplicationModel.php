<?php

class ApplicationModel extends CI_Model
{
    public $active_table;
    public function __construct()
    {
        parent::__construct();
        $this->active_table = (in_array('ldm_vcdojtxev66laxb1_web_form_appointments', $this->db->list_tables())? 'ldm_vcdojtxev66laxb1_web_form_appointments':'');
    }

    public function get($columns= null, $where = null){
        if(null !== $columns && count($columns)> 0){
            $this->db->select($columns);
        }
        if(null !== $where && count($where)> 0){
            $this->db->where($where);
        }
        return json_encode($this->db->get($this->active_table)->result_array());
    }

    public function get_tables($tables){
        $data = [];
        foreach ($tables as $key => $table) {
            if(in_array($table, $this->db->list_tables())){
                array_push($data, $table);
            }
        }
        return $data;
    }
}
