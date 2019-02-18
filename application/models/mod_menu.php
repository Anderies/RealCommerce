<?php
class mod_menu extends ci_model{
    function select_all(){
        return $this->db->get('tabel_menu');
    }

    function select_parent(){
        return $this->db->get_where('tabel_menu',array('parent'=>0));
    }

    function save(){
        $data=array(
            'menu_title'        => $this->input->post('nama_menu'),
            'parent'            =>$this->input->post('parent'),
            'link'              =>$this->input->post('link'),
            'menu_title_seo' =>seo_title($this->input->post('nama')));
        $this->db->insert('tabel_menu',$data);
    }

    function update(){
        $data=array(
            'menu_title'        => $this->input->post('nama_menu'),
            'parent'            =>$this->input->post('parent'),
            'link'              =>$this->input->post('link'),
            'menu_title_seo' =>seo_title($this->input->post('nama')));
        $this->db->where('menu_id',$this->input->post('id'));
        $this->db->update('tabel_menu',$data);
    }
    
}