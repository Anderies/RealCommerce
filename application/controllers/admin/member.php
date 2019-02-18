<?php
class member extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('mod_member');
    }

    function index(){
        $data['record'] = $this->mod_member->select_all()->result();
        $this->template->load('templateadmin','admin/member/data',$data);
    }

    function post(){
        if(isset($_POST['submit'])){
            $this->mod_member->save();
            redirect('admin/member');
        }else{
            $data['parent'] = $this->mod_member->select_parent()->result();
            $this->template->load('templateadmin','admin/member/post',$data);
        }
    }

    function detail(){
            $id = $this->uri->segment(4);
            $data['row'] = $this->db->get_where('tabel_member',array('member_id'=>$id))->row_array();
            $data['order'] = $this->db->get_where('tabel_transaksi',array('member_id'=>$id))->result();
            $this->template->load('templateadmin','admin/member/detail',$data);
        
    }

    function delete(){
        $this->db->where('member_id',$this->uri->segment(4));
        $this->db->delete('tabel_member');
        redirect('admin/member');
    } 
}

?>