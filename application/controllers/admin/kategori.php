<?php
class kategori extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('mod_kategori');
    }

    function index(){
        $data['record'] = $this->mod_kategori->select_all()->result();
        $this->template->load('templateadmin','admin/kategori/data',$data);
    }

    function post(){
        if(isset($_POST['submit'])){
            $this->mod_kategori->save();
            redirect('admin/kategori');
        }else{
            $data['parent'] = $this->mod_kategori->select_parent()->result();
            $this->template->load('templateadmin','admin/kategori/post',$data);
        }
    }

    function edit(){
        if(isset($_POST['submit'])){
            $this->mod_kategori->update();
            redirect('admin/kategori');
        }else{
            $id = $this->uri->segment(4);
            $data['row'] = $this->db->get_where('tabel_kategori',array('kategori_id'=>$id))->row_array();
            $data['parent'] = $this->mod_kategori->select_parent()->result();
            $this->template->load('templateadmin','admin/kategori/edit',$data);
        }
    }

    function delete(){
        $this->db->where('kategori_id',$this->uri->segment(4));
        $this->db->delete('tabel_kategori');
        redirect('admin/kategori');
    } 
}

?>