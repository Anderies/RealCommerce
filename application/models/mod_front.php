<?php

class Mod_front extends ci_model{
    function getProduct(){
        return $this->db->query("select * from tabel_product limit 6");
    }

}