<?php
class mod_halaman extends ci_model{
    function select_all(){
        return $this->db->get('tabel_pages');
    }

    function select_parent(){
        return $this->db->get_where('tabel_menu',array('parent'=>0));
    }

    function save(){
        $data=array(
            'judul'                => $this->input->post('judul'),
            'judul_seo'            => seo_title($this->input->post('judul')),
            'content'              =>$this->input->post('content'));
        $this->db->insert('tabel_pages',$data);
    }

    function update(){
        $data=array(
            'judul'                => $this->input->post('judul'),
            'judul_seo'            => seo_title($this->input->post('judul')),
            'content'              =>$this->input->post('content'));
        $this->db->where('pages_id',$this->input->post('id'));
        $this->db->update('tabel_pages',$data);
    }
    
}