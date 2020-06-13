<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Dashboard extends MY_Controller {

    function __construct(){
        parent::__construct();
//        $this->load->model('notifikasi_m');
    }

    public function index()
    {                
        $this->load->model('claim_bensin_m');
        $this->load->model('claim_parkir_m');
        $this->data['title'] = 'Halaman Dashboard';
        $this->data['subview'] = 'dashboard/index';        
        
        if ($this->session->userdata('level') == CLERK) {
                        
            $this->data['total_klaim'] = $this->claim_bensin_m->get_count(['claim_by' => $this->session->userdata('nik')]) +
                                         $this->claim_parkir_m->get_count(['claim_by' => $this->session->userdata('nik')]);

            $this->data['total_klaim_verifikasi'] = $this->claim_bensin_m->get_count(['claim_by' => $this->session->userdata('nik'), 'status_claim' => KLAIM_VERIFIKASI]) +
                                                    $this->claim_parkir_m->get_count(['claim_by' => $this->session->userdata('nik'), 'status_claim' => KLAIM_VERIFIKASI]);

            $this->data['total_klaim_setujui'] = $this->claim_bensin_m->get_count(['claim_by' => $this->session->userdata('nik'), 'status_claim' => KLAIM_SETUJUI]) +
                                                 $this->claim_parkir_m->get_count(['claim_by' => $this->session->userdata('nik'), 'status_claim' => KLAIM_SETUJUI]);

            $this->data['total_klaim_tolak'] = $this->claim_bensin_m->get_count(['claim_by' => $this->session->userdata('nik'), 'status_claim' => KLAIM_TOLAK]) +
                                               $this->claim_parkir_m->get_count(['claim_by' => $this->session->userdata('nik'), 'status_claim' => KLAIM_TOLAK]);

        } else {
            
            $this->data['total_klaim'] = $this->claim_bensin_m->get_count() +
                                         $this->claim_parkir_m->get_count();

            $this->data['total_klaim_verifikasi'] = $this->claim_bensin_m->get_count(['status_claim' => KLAIM_VERIFIKASI]) +
                                                    $this->claim_parkir_m->get_count(['status_claim' => KLAIM_VERIFIKASI]);

            $this->data['total_klaim_setujui'] = $this->claim_bensin_m->get_count(['status_claim' => KLAIM_SETUJUI]) +
                                                 $this->claim_parkir_m->get_count(['status_claim' => KLAIM_SETUJUI]);

            $this->data['total_klaim_tolak'] = $this->claim_bensin_m->get_count(['status_claim' => KLAIM_TOLAK]) +
                                               $this->claim_parkir_m->get_count(['status_claim' => KLAIM_TOLAK]);

        }
        
        $this->load->view('_layout_main', $this->data);
        
    }

}
