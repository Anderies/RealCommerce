<?php
class Home extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('mod_front');
    }
    function index(){
        $data['product'] = $this->mod_front->getProduct();
        $this->template->load('anjay','home',$data);
    }
}