<?php
class halaman extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('mod_halaman');
    }

    function index(){
        $data['record'] = $this->mod_halaman->select_all()->result();
        $this->template->load('templateadmin','admin/halaman/data',$data);
    }

    function post(){
        if(isset($_POST['submit'])){
            $this->mod_halaman->save();
            redirect('admin/halaman');
        }else{
            $this->template->load('templateadmin','admin/halaman/post');
        }
    }

    function edit(){
        if(isset($_POST['submit'])){
            $this->mod_halaman->update();
            redirect('admin/halaman');
        }else{
            $id = $this->uri->segment(4);
            $data['row'] = $this->db->get_where('tabel_pages',array('pages_id'=>$id))->row_array();
            $this->template->load('templateadmin','admin/halaman/edit',$data);
        }
    }

    function delete(){
        $this->db->where('pages_id',$this->uri->segment(4));
        $this->db->delete('tabel_pages');
        redirect('admin/halaman'); 
    } 
}

?>