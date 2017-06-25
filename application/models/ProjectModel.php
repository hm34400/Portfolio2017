<?php

class ProjectModel extends CI_Model{
    
    public function add($object){
        
    }
    public function delete($id){
        
    }
    public function get($id){
        
    }
    public function get1(){
        $query = $this->db->query("SELECT * FROM Project where idProject = 1");
        return $query->result_array();
    }
    public function get2(){
        $query = $this->db->query("SELECT * FROM Project where idProject = 2");
        return $query->result_array();
    }
    public function get3(){
        $query = $this->db->query("SELECT * FROM Project where idProject = 3");
        return $query->result_array();
    }
    public function getAll(){
        $sql = "SELECT * FROM Project";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function update($object){
        
    }
}

