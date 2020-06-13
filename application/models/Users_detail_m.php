<?php

class Users_detail_m extends MY_Model {

    protected $_table_name = 't_users_detail';
    protected $_primary_key = 'nik';
    protected $_primary_filter = 'strval';
    protected $_order_by = '';
    protected $_timestamps = FALSE;
    protected $_timestamps_field = [];
    
    public function get_level($nik){
        $this->db->select('level');
        $this->db->where('nik', $nik);
        $result = $this->db->get('t_users_detail')->row();
        return $result;
    }
}
