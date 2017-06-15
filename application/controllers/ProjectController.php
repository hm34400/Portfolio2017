<?php

class ProjectController extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('ProjectModel');
        $this->load->helper('url_helper');
    }
}

