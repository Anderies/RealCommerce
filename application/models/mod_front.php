<?php

class mod_front extends ci_model{
    function getProduct(){
        return $this->db->query("SELECT * FROM tabel_product limit 6");
    }
}
?>