<?php

class SkillsController extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('SkillsModel');
        $this->load->helper('url_helper');
    }
}

