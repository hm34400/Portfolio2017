<?php

class BackgroundController extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('BackgroundModel');
        $this->load->helper('url_helper');
    }
}
