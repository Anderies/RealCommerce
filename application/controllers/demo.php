<?php

class Demo extends ci_controller{
    function index(){
        $this->template->load('templateadmin','dashboard');
    }
    
}

