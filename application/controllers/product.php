<?php
class product extends ci_controller{
    function detail(){
        $data['product']=$this->db->get_where('tabel_product',array('nama_product_seo'=>$this->uri->segment(3)))->row_array();
        $this->template->load('template','detail_product',$data);
    }
}