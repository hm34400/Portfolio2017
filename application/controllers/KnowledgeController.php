<?php

class KnowledgeController extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('KnowledgeModel');
        $this->load->helper('url_helper');
    }
}

