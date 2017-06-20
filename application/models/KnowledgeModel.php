<?php

class KnowledgeModel extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }


    public function add($object){
        
    }
    public function delete($id){
        
    }
    public function get($id){
        
    }
    public function getAll(){
        $query = $this->db->query("SELECT * FROM Knowledge");
        return $query->result_array();
    }
    public function update($object){
        
    }
}

