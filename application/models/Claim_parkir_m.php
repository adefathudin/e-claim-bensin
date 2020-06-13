<?php

class Claim_parkir_m extends MY_Model {

    protected $_table_name = 't_claim_parkir';
    protected $_primary_key = 'id_claim_parkir';
    protected $_primary_filter = 'strval';
    protected $_order_by = '';
    protected $_timestamps = FALSE;
    protected $_timestamps_field = [];
    
    public function get_join_user($id_claim_parkir){
    
    $this->db->select('a.*,b.*');
    $this->db->from('t_users_detail a');
    $this->db->join('t_claim_parkir b', 'a.nik = b.claim_by');
    $this->db->where('b.id_claim_parkir', $id_claim_parkir);
    
    $result = $this->db->get()->result();
    return $result;
    }
}
