<?php

class AboutController extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('AboutModel');
        $this->load->helper('url_helper');
    }
}
