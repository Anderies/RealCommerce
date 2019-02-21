<?php

class p extends CI_Controller{

    function detail(){
        $seo = $this->uri->segment(2);
        $data['artikel'] = $this->db->get_where('tabel_pages',array('judul_seo'=>$seo))->row_array();
        $this->template->load('template','artikel',$data);
    }
}