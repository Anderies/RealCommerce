<?php
class Language extends CI_Controller{
    function change($lang){
        $this->session->set_userdata(array('language'=>$lang));
        redirect(base_url());
    }
}

?>