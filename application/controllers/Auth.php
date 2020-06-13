<?php

class Auth extends CI_Controller {

    public function index() {
        if ($this->session->userdata('nik')) {
            redirect(base_url('dashboard'));
            exit;
        }

        $this->data['title'] = 'Halaman Login';
        $this->load->view('_layout_login', $this->data);
    }

    public function cek_login() {
        $this->load->model('users_detail_m');
        $nik = $this->input->post('nik');
        $password = md5($this->input->post('password'));

        if ($this->users_detail_m->get_count(['nik' => $nik, 'password' => $password, 'active' => 1]) > 0) {
            $level = $this->users_detail_m->get_level($nik);
            $this->session->set_userdata(['nik' => $nik, 'level' => $level->level]);
            redirect('auth');
        } else {
            echo ("<script>window.alert('NIK atau password salah!');window.history.back();</script>");
        }        
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('auth');
    }

    public function tambah_user() {        
        
        $this->load->model('users_detail_m');

        $password = md5($this->input->post('password'));
        $nik = $this->input->post('nik');        
        $nama_lengkap = strtoupper($this->input->post('nama'));
        $plat = $this->input->post('plat');        
        $divisi = $this->input->post('divisi');        
        $jabatan = $this->input->post('jabatan'); 
        
        if ($divisi != FINANCE && $jabatan == SUPERVISOR) {
            $level = SUPERVISOR;
        } else if ($divisi == FINANCE){
            $level = FINANCE;
        } else {
            $level = CLERK;
        }

        if ($this->users_detail_m->get_count(array('nik' => $nik)) > 0) {
            echo ("<script>window.alert('NIK sudah terdaftar!');window.history.back();</script>");
            return false;
        } else {
            
            $data_user_detail = array(
                'nik' => $nik, 'nama_lengkap' => $nama_lengkap,
                'no_plat' => $plat, 'divisi' => $divisi, 'jabatan' => $jabatan, 'level' => $level, 'password' => $password
            );

            if ($this->users_detail_m->save($data_user_detail)) { 
                echo ("<script>window.alert('User berhasil ditambahkan');window.history.back();</script>");                
            } else {                
                echo ("<script>window.alert('User gagal ditambakan');window.history.back();</script>");
            }
        }
    }

}
