<?php

class ViewController extends CI_Controller {
    
    public function view(){
        
        $this->load->model('KnowledgeModel');
        $this->load->model('AboutModel');
        $this->load->model('SkillsModel');
        $this->load->model('ProjectModel');
        $this->load->model('BackgroundModel');
        $this->load->helper('url');
        
        
        $data['textP'] = $this->AboutModel->getAll();
        $data['dip1'] = $this->AboutModel->get1();
        $data['dip2'] = $this->AboutModel->get2();
        $data['dip3'] = $this->AboutModel->get3();
        $data['skill1'] = $this->SkillsModel->get1();
        $data['skill2'] = $this->SkillsModel->get2();
        $data['skill3'] = $this->SkillsModel->get3();
        $data['skill4'] = $this->SkillsModel->get4();
        $data['pro1'] = $this->ProjectModel->get1();
        $data['pro2'] = $this->ProjectModel->get2();
        $data['pro3'] = $this->ProjectModel->get3();
        $data['name'] = $this->KnowledgeModel->getAll();
        $data['back'] = $this->BackgroundModel->getAll();
        $this->load->view('index', $data);
    }
}

