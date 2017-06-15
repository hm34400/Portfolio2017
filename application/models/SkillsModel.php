<?php

class SkillsModel extends CrudModel{
    
    public function add($object){
        
    }
    public function delete($id){
        
    }
    public function get($id){
        
    }
    public function getAll(){
        $sql = "SELECT * FROM skills";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function update($object){
        
    }
}

