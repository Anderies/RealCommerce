<?php
class mod_member extends ci_model{
    function select_all(){
        return $this->db->get('tabel_member');
    }

    function select_parent(){
        return $this->db->get_where('tabel_member',array('parent'=>0));
    }

    function save(){
        $data=array(
            'nama_member'     => $this->input->post('nama'),
            'parent'            =>$this->input->post('parent'),
            'link'              =>$this->input->post('link'),
            'nama_member_seo' =>seo_title($this->input->post('nama')));
        $this->db->insert('tabel_member',$data);
    }

    function update(){
        $data=array(
            'nama_member'     => $this->input->post('nama'),
            'parent'            =>$this->input->post('parent'),
            'link'              =>$this->input->post('link'),
            'nama_member_seo' =>seo_title($this->input->post('nama')));
        $this->db->where('member_id',$this->input->post('id'));
        $this->db->update('tabel_member',$data);
    }
    
}