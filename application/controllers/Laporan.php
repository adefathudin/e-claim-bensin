<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Laporan extends MY_Controller {

    public function index(){
        
        $this->load->model('claim_bensin_m');
        
        $this->data['title'] = 'Halaman Dashboard';
        $this->data['subview'] = 'laporan/index';
        
        $this->data['data_claim'] = $this->claim_bensin_m->get();
        
        $this->load->view('_layout_main', $this->data);
        
    }
    
    public function bensin() {

        $this->load->model('claim_bensin_m');

        $this->data['title'] = 'Laporan Klaim Bensin';
        $this->data['subview'] = 'laporan/bensin';

        if ($this->session->userdata('level') != CLERK) {
            $this->data['data_claim'] = $this->claim_bensin_m->get();
        } else {
            $this->data['data_claim'] = $this->claim_bensin_m->get_by(['claim_by' => $this->session->userdata('nik')]);
        }

        $this->load->view('_layout_main', $this->data);
    }

    public function parkir(){
        
        $this->load->model('claim_parkir_m');
        
        $this->data['title'] = 'Laporan Klaim Parkir';
        $this->data['subview'] = 'laporan/parkir';

        if ($this->session->userdata('level') != CLERK) {
            $this->data['data_claim'] = $this->claim_parkir_m->get();
        } else {
            $this->data['data_claim'] = $this->claim_parkir_m->get_by(['claim_by' => $this->session->userdata('nik')]);
        }

        $this->load->view('_layout_main', $this->data);
        
    }

}
