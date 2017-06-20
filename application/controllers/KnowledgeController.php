<?php

class KnowledgeController extends CI_Controller{
    
        public function accueil(){
        $this->load->model('KnowledgeModel');
        $this->load->helper('url');
        
        $data['name'] = $this->KnowledgeModel->getAll();
        $this->load->view('index', $data);
    }
}

