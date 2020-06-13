<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Divisi extends MY_Controller {

    function __construct(){
        parent::__construct();
    }
    
    public function index()
    {                
        $this->load->model('divisi_m');
        $this->data['title'] = 'Halaman Dashboard';
        $this->data['subview'] = 'divisi/list';       
        $this->data['lists'] = $this->divisi_m->get();
        $this->load->view('_layout_main', $this->data);
    }
        
    public function delete()
    {        
        $this->load->model('divisi_m');
        
        $id = $this->input->get('id');
        
        if ($this->divisi_m->delete($id)){
            echo ("<script>window.alert('ID kategori ".$id." berhasil dihapus');window.history.back();</script>");
        } else {
            echo ("<script>window.alert('gagal menghapus kategori');window.history.back();</script>");
        }
    }
    
    public function tambah() {        
        
        $this->load->model('divisi_m');
    
        $kategori = $this->input->post('kategori');        
        $des = $this->input->post('des'); 
        
        if ($this->divisi_m->get_count(['des' => $des])){
            echo ("<script>window.alert('Kategori $kategori $des duplicate entry');window.history.back();</script>");         
            return false;
        }
        
            if ($this->divisi_m->save(['kategori' => $kategori, 'des' => $des])) { 
                echo ("<script>window.alert('Kategori $kategori $des berhasil ditambahkan');window.history.back();</script>");                
            } else {                
                echo ("<script>window.alert('Kategori $kategori $des gagal ditambakan');window.history.back();</script>");
            }
        }

}
