<?php

class Claim_bensin_m extends MY_Model {

    protected $_table_name = 't_claim_bensin';
    protected $_primary_key = 'id_claim_bensin';
    protected $_primary_filter = 'strval';
    protected $_order_by = '';
    protected $_timestamps = FALSE;
    protected $_timestamps_field = [];
    
    public function get_join_user($id_claim_bensin){
    
    $this->db->select('a.*,b.*');
    $this->db->from('t_users_detail a');
    $this->db->join('t_claim_bensin b', 'a.nik = b.claim_by');
    $this->db->where('b.id_claim_bensin', $id_claim_bensin);
    
    $result = $this->db->get()->result();
    return $result;
    }
    
}
