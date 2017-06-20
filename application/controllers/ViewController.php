<?php

class ViewController extends CI_Controller {
    
    public function view(){
        
        $this->load->model('KnowledgeModel');
        $this->load->helper('url');
        
        $data['detail'] = $this->KnowledgeModel->getAll();
        $this->load->view('index', $data);
    }
}

