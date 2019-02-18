<?php

class transaksi extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('mod_transaksi');
    }

    function index() {
        $data['record'] = $this->mod_transaksi->select_all()->result();
        $this->template->load('templateadmin', 'admin/transaksi/data', $data);
    }

    function post() {
        if (isset($_POST['submit'])) {
            $this->mod_transaksi->simpan();
            redirect('admin/transaksi');
        } else {
            $data['parent'] = $this->mod_transaksi->select_parent()->result();
            $this->template->load('templateadmin', 'admin/transaksi/post', $data);
        }
    }

    function detail() {
        if (isset($_POST['submit'])) {
            $this->mod_transaksi->update();
            redirect('admin/transaksi/detail/'.$_POST['id']);
        } else {
            $id = $this->uri->segment(4);
            $transaksi = $this->db->get_where('tabel_transaksi', array('transaksi_id' => $id))->row_array();
            $data['row'] = $this->db->get_where('tabel_member', array('member_id' => $transaksi['member_id']))->row_array();
            $sql = "SELECT tb1.*,tb2.nama_product,tb2.harga 
                    FROM tabel_transaksi_detail as tb1,tabel_product as tb2
                    WHERE tb1.product_id=tb2.product_id and tb1.transaksi_id=$id";
            $data['order'] = $this->db->query($sql)->result();
            $data['pesanan'] = $this->db->get_where('tabel_transaksi', array('transaksi_id' => $id))->row_array();
            $this->template->load('templateadmin', 'admin/transaksi/detail', $data);
        }
    }

    function delete() {
        $this->db->where('transaksi_id', $this->uri->segment(4));
        $this->db->delete('tabel_transaksi');
        redirect('admin/transaksi');
    }

}
