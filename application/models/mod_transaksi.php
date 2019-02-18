<?php
class mod_transaksi extends ci_model{
    function select_all(){
        $sql="SELECT tt.*,tm.nama_lengkap 
        FROM tabel_transaksi as tt, tabel_member as tm 
        WHERE tm.member_id=tt.member_id";
        return $this->db->query($sql);
    }

    function update(){
        $this->db->where('transaksi_id',$this->input->post('id'));
        $this->db->update('tabel_transaksi',array('status'=>  $this->input->post('status'),'no_resi'=>  $this->input->post('resi')));
    }
    
}