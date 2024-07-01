<?php

class LeadsModel extends CI_Model
{
    public $table;
    public function __construct()
    {
        parent::__construct();
        $this->table = (in_array('ldm_vcdojtxev66laxb1_web_form_appointments', $this->db->list_tables())? 'ldm_vcdojtxev66laxb1_web_form_appointments': null);
    }

    public function get($columns= null, $where = null){
        if(null !== $columns && count($columns)> 0){
            $this->db->select($columns);
        }
        if(null !== $where && count($where)> 0){
            $this->db->where($where);
        }
        if(null !== $this->table){
            $results = [
                'columns' => $columns??= $this->get_visible_columns($this->table),
                'data' => $this->db->get($this->table)->result_array()
            ];
            return json_encode($results);
        } else {
            return json_encode(["ERROR"]);
        }
    }

    public function get_labels(){
        
    }

    public function get_visible_columns(){
        $fields = [];
        $db_fields = $this->db->list_fields($this->table);
        for ($i=0; $i < count($db_fields); $i++) { 
            $fields[$i]['db'] = $db_fields[$i];
            $fields[$i]['label'] = ucwords(str_replace('_', ' ', $db_fields[$i]));
        }
        return $fields;
    }
}
