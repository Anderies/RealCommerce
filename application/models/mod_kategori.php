<?php
class mod_kategori extends ci_model{
    function select_all(){
        return $this->db->get('tabel_kategori');
    }

    function select_parent(){
        return $this->db->get_where('tabel_kategori',array('parent'=>0));
    }

    function save(){
        $data=array(
            'nama_kategori'     => $this->input->post('nama'),
            'parent'            =>$this->input->post('parent'),
            'link'              =>$this->input->post('link'),
            'nama_kategori_seo' =>seo_title($this->input->post('nama')));
        $this->db->insert('tabel_kategori',$data);
    }

    function update(){
        $data=array(
            'nama_kategori'     => $this->input->post('nama'),
            'parent'            =>$this->input->post('parent'),
            'link'              =>$this->input->post('link'),
            'nama_kategori_seo' =>seo_title($this->input->post('nama')));
        $this->db->where('kategori_id',$this->input->post('id'));
        $this->db->update('tabel_kategori',$data);
    }
    
}