<?php

class Divisi_m extends MY_Model {

    protected $_table_name = 'r_divisi';
    protected $_primary_key = 'id';
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
