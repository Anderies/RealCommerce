<?php

class cart extends ci_controller{

    function add_tocart(){
        $product_data = array(
            'product_id'=>$this->input->post('product_id',TRUE),
            'qty'=> $this->input->post('qty',TRUE),
            'transaksi_id'=>0);

         $this->db->insert('tabel_transaksi_detail',$product_data);
         redirect('cart/shopcart');


    }

    function shopcart(){
        $query="SELECT tb1.*,tb2.nama_product,tb2.gambar,tb2.harga
                FROM tabel_transaksi_detail as tb1 , tabel_product as tb2
                WHERE tb1.product_id=tb2.product_id and tb1.transaksi_id=0
                order by tb1.detail_id";
        $data['item'] = $this->db->query($query)->result();

        $this->template->load('template','shopcart',$data);
    }

    function hapus_item($id){
        $this->db->where('detail_id',$id);
        $this->db->delete('tabel_transaksi_detail');
        redirect('cart/shopcart');
    }

    function update_stock(){
        $list = $this->db->query("select * from tabel_transaksi_detail order by detail_id");
        foreach ($list->result() as $l) {
            $id = $this->input->post('id' . $l->detail_id);
            $new_qty = $this->input->post('quantity' . $l->detail_id);
            $this->db->where('detail_id', $id);
            $this->db->update('tabel_transaksi_detail',array('qty'=>$new_qty));
        }
        redirect('cart/shopcart');
    }
    
}
?>