<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Users extends MY_Controller {

    function __construct(){
        parent::__construct();
    }

    public function index()
    {        
        $this->data['title'] = 'Halaman Dashboard';
        $this->data['subview'] = 'users/list';
        $this->load->view('_layout_main', $this->data);
    }
    
    public function list()
    {                
        $this->load->model('users_detail_m');
        $this->data['title'] = 'Halaman Dashboard';
        $this->data['subview'] = 'users/list';        
        $this->data['list_users'] = $this->users_detail_m->get_by(['active' => 1]);
        $this->load->view('_layout_main', $this->data);
    }
    
    public function tambah()
    {        
        $this->load->model('divisi_m');
        $this->data['title'] = 'Halaman Dashboard';
        $this->data['subview'] = 'users/tambah';          
        $this->data['list_divisi'] = $this->divisi_m->get_by(['kategori' => 'Divisi']);
        $this->data['list_jabatan'] = $this->divisi_m->get_by(['kategori' => 'Jabatan']);
        $this->load->view('_layout_main', $this->data);
    }
    
    public function ban()
    {        
        $this->load->model('users_detail_m');
        
        $nik = $this->input->get('nik');
        
        if ($this->session->userdata('nik') == $nik){
            echo ("<script>window.alert('Anda tidak bisa menonaktifkan user anda sendiri');window.history.back();</script>");
            return false;
        }
        if ($this->users_detail_m->save(['active' => 0],$nik)){
            echo ("<script>window.alert('User ".$nik." berhasil dinonaktifkan');window.history.back();</script>");
        } else {
            echo ("<script>window.alert('gagal menonaktifkan user');window.history.back();</script>");
        }
    }
    
    public function active()
    {        
        $this->load->model('users_detail_m');
        
        $nik = $this->input->get('nik');
        
        if ($this->users_detail_m->save(['active' => 1],$nik)){
            echo ("<script>window.alert('User ".$nik." berhasil diaktifkan kembali');window.history.back();</script>");
        } else {
            echo ("<script>window.alert('gagal mengaktifkan user');window.history.back();</script>");
        }
    }

}
