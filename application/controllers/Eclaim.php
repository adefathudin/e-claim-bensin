<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Eclaim extends MY_Controller {

    public function index() {
        $this->data['title'] = 'Halaman Dashboard';
        $this->data['subview'] = 'eclaim/index';
        $this->load->view('_layout_main', $this->data);
    }

    public function bensin() {
        $this->data['title'] = 'Klaim Bensin';
        $this->data['subview'] = 'eclaim/bensin';
        $this->load->view('_layout_main', $this->data);
    }

    public function parkir() {

        $this->load->model('toko_m');

        $this->data['title'] = 'Klaim Parkir';
        $this->data['subview'] = 'eclaim/parkir';
        $this->data['data_toko'] = $this->toko_m->get();
        $this->load->view('_layout_main', $this->data);
    }

    public function simpan_klaim_bensin() {

        $this->load->model('claim_bensin_m');

        $pic = $this->input->post('pic');
        $tanggal_pengisian = $this->input->post('tanggal_pengisian');
        $kode_spbu = $this->input->post('kode_spbu');
        $km_awal = $this->input->post('km_awal');
        $km_akhir = $this->input->post('km_akhir');
        $liter = $this->input->post('liter');
        $rupiah = $this->input->post('rupiah');
        $struk = $this->input->post('struk');
        $upload_path = 'assets/images/claim/';

        $this->load->library('upload', [
            'upload_path' => $upload_path,
            'allowed_types' => 'jpg|jpeg|png',
            'file_name' => 'Klaim-Bensin-' . date('Y-m-d-hid') . '-' . uniqid()
        ]);

        if (!$this->upload->do_upload('upload')) {
            echo ("<script>window.alert('Upload struk gagal disimpan');window.history.back();</script>");
            return false;
        } else {
            $data = $this->upload->data();
        }

        $data_klaim = [
            'id_claim_bensin' => strtoupper('KBNSN'.substr(uniqid(),6)),
            'claim_by' => $pic,
            'tanggal_pengisian' => $tanggal_pengisian,
            'kode_spbu' => $kode_spbu,
            'km_awal' => $km_awal,
            'km_akhir' => $km_akhir,
            'liter' => $liter,
            'rupiah' => $rupiah,
            'gambar_struk' => $upload_path . $data['file_name'],
        ];

        $insert = $this->claim_bensin_m->save($data_klaim);

        if ($insert) {
            echo ("<script>window.alert('Data eclaim berhasil disimpan');window.history.back();</script>");
        } else {
            echo "<script>alert('Data eclaim gagal disimpan')</script>";
            redirect(base_url('eclaim'));
        }
    }

    public function simpan_klaim_parkir() {

        $this->load->model('claim_parkir_m');

        $pic = $this->input->post('pic');
        $tanggal_parkir = $this->input->post('tanggal_parkir');
        $tempat = $this->input->post('tempat');
        $jam_masuk = $this->input->post('jam_masuk');
        $jam_keluar = $this->input->post('jam_keluar');
        $rupiah = $this->input->post('rupiah');
        $upload_path = 'assets/images/claim/';

        $this->load->library('upload', [
            'upload_path' => $upload_path,
            'allowed_types' => 'jpg|jpeg|png',
            'file_name' => 'Klaim-Parkir-' . date('Y-m-d-hid') . '-' . uniqid()
        ]);

        if (!$this->upload->do_upload('upload')) {
            print_r($this->upload->display_errors());
            echo ("<script>window.alert('Upload struk gagal');window.history.back();</script>");
            return false;
        } else {
            $data = $this->upload->data();
        }

        $data_klaim = [
            'id_claim_parkir' => strtoupper('KPRK'.substr(uniqid(),6)),
            'claim_by' => $pic,
            'tanggal_parkir' => $tanggal_parkir,
            'tempat' => $tempat,
            'jam_masuk' => $jam_masuk,
            'jam_keluar' => $jam_keluar,
            'rupiah' => $rupiah,
            'gambar_struk' => $upload_path . $data['file_name'],
        ];

        $insert = $this->claim_parkir_m->save($data_klaim);

        if ($insert) {
            echo ("<script>window.alert('Data eclaim berhasil disimpan');window.history.back();</script>");
        } else {
            echo "<script>alert('Data eclaim gagal disimpan')</script>";
            redirect(base_url('eclaim'));
        }
    }

    public function detail_claim_bensin() {        
        
        $this->load->model('claim_bensin_m');

        $id_claim_bensin = $this->input->get('id_claim_bensin');

        $detail_claim = $this->claim_bensin_m->get_join_user($id_claim_bensin);

        if ($detail_claim) {
            $output['status'] = true;
            $output['item'] = $detail_claim;
        } else {
            $output['status'] = false;
            $output['message'] = $this->$detail_claim->get_last_message();
        }
        echo json_encode($output);
    }
    
    public function detail_claim_parkir() {

        $this->load->model('claim_parkir_m');

        $id_claim_parkir = $this->input->get('id_claim_parkir');

        $detail_claim = $this->claim_parkir_m->get_join_user($id_claim_parkir);

        if ($detail_claim) {
            $output['status'] = true;
            $output['item'] = $detail_claim;
        } else {
            $output['status'] = false;
            $output['message'] = $this->claim_parkir_m->get_last_message();
        }
        echo json_encode($output);
    }

    public function approve_claim_bensin()
    {        
        $this->load->model('claim_bensin_m');
        
        $by = $this->session->userdata('level');
        $id_claim_bensin = $this->input->post('id_claim_bensin');
        
        $reject_claim_by_finance = $this->input->post('reject_claim_by_finance');
        $approve_claim_by_finance = $this->input->post('approve_claim_by_finance');
        
        $reject_claim_by_supervisor = $this->input->post('reject_claim_by_supervisor');
        $approve_claim_by_supervisor = $this->input->post('approve_claim_by_supervisor');
        
        $keterangan_reject = $this->input->post('keterangan_reject');
        
        if ($by == FINANCE){
            if (isset($reject_claim_by_finance)){
                $this->claim_bensin_m->save(['status_claim' => 4, 'keterangan_reject' => 'oleh '.$by . ": ". $keterangan_reject],$id_claim_bensin);
                echo ("<script>window.alert('Klaim ".$id_claim_bensin." berhasil direject');window.history.back();</script>");
            } else {
                $this->claim_bensin_m->save(['status_claim' => 1],$id_claim_bensin);
                echo ("<script>window.alert('Klaim ".$id_claim_bensin." berhasil diapprove');window.history.back();</script>");
            }
        } else if ($by == SUPERVISOR){
            if (isset($reject_claim_by_supervisor)){
                $this->claim_bensin_m->save(['status_claim' => 4, 'keterangan_reject' => 'oleh '.$by . ": ". $keterangan_reject],$id_claim_bensin);
                echo ("<script>window.alert('Klaim ".$id_claim_bensin." berhasil direject');window.history.back();</script>");
            } else {
                $this->claim_bensin_m->save(['status_claim' => 2],$id_claim_bensin);
                echo ("<script>window.alert('Klaim ".$id_claim_bensin." berhasil diapprove');window.history.back();</script>");
            }
        }
        
    }
    
     public function approve_claim_parkir()
    {        
        $this->load->model('claim_parkir_m');
        
        $by = $this->session->userdata('level');
        $id_claim_bensin = $this->input->post('id_claim_parkir');
        
        $reject_claim_by_finance = $this->input->post('reject_claim_by_finance');
        $approve_claim_by_finance = $this->input->post('approve_claim_by_finance');
        
        $reject_claim_by_supervisor = $this->input->post('reject_claim_by_supervisor');
        $approve_claim_by_supervisor = $this->input->post('approve_claim_by_supervisor');
        
        $keterangan_reject = $this->input->post('keterangan_reject');
        
        if ($by == FINANCE){
            if (isset($reject_claim_by_finance)){
                $this->claim_parkir_m->save(['status_claim' => 4, 'keterangan_reject' => 'oleh '.$by . ": ". $keterangan_reject],$id_claim_bensin);
                echo ("<script>window.alert('Klaim ".$id_claim_bensin." berhasil direject');window.history.back();</script>");
            } else {
                $this->claim_parkir_m->save(['status_claim' => 1],$id_claim_bensin);
                echo ("<script>window.alert('Klaim ".$id_claim_bensin." berhasil diapprove');window.history.back();</script>");
            }
        } else if ($by == SUPERVISOR){
            if (isset($reject_claim_by_supervisor)){
                $this->claim_parkir_m->save(['status_claim' => 4, 'keterangan_reject' => 'oleh '.$by . ": ". $keterangan_reject],$id_claim_bensin);
                echo ("<script>window.alert('Klaim ".$id_claim_bensin." berhasil direject');window.history.back();</script>");
            } else {
                $this->claim_parkir_m->save(['status_claim' => 2],$id_claim_bensin);
                echo ("<script>window.alert('Klaim ".$id_claim_bensin." berhasil diapprove');window.history.back();</script>");
            }
        }
        
    }

}
