<?php
class product extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model(array('mod_product','mod_kategori'));
    }

    function index(){
        $data['record'] = $this->mod_product->select_all()->result();
        $this->template->load('templateadmin','admin/product/data',$data);
    }

    function post(){
        if(isset($_POST['submit'])){
           $config['upload_path']='./gambar_product'; //tempat tersimpan gambar
           $config['allowed_types'] = 'jpg|png||jpeg';
           $this->load->library('upload',$config);
           $this->upload->do_upload();
           $data = $this->upload->data();
            $this->mod_product->save($data['file_name']);

            redirect('admin/product');
        }else{
            $data['kategori'] = $this->mod_kategori->select_all()->result();
            $this->template->load('templateadmin','admin/product/post',$data);
        }
    }

    function edit(){
        if(isset($_POST['submit'])){
            $config['upload_path']='./gambar_product'; //tempat tersimpan gambar
            $config['allowed_types'] = 'jpg|png||jpeg';
            $this->load->library('upload',$config);
            $this->upload->do_upload();
            $data = $this->upload->data(); 
            $this->mod_product->update($data['file_name']);
            redirect('admin/product');
        }else{
            $id = $this->uri->segment(4);
            $data['row'] = $this->db->get_where('tabel_product',array('product_id'=>$id))->row_array();
            $data['kategori'] = $this->mod_kategori->select_all()->result();
            $this->template->load('templateadmin','admin/product/edit',$data);
        }
    }

    function delete(){
        $this->db->where('product_id',$this->uri->segment(4));
        $this->db->delete('tabel_product');
        redirect('admin/product');
    } 
}
?>