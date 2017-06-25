<?php

class SkillsModel extends CI_Model{
    
    public function add($object){
        
    }
    public function delete($id){
        
    }
    public function get($id){
        
    }
    public function getAll(){
        $query = $this->db->query("SELECT * FROM Skills");
        return $query->result_array();
    }
    public function get1(){
        $query = $this->db->query("SELECT * FROM Skills where idSkills = 1");
        return $query->result_array();
    }
    public function get2(){
        $query = $this->db->query("SELECT * FROM Skills where idSkills = 2");
        return $query->result_array();
    }
    public function get3(){
        $query = $this->db->query("SELECT * FROM Skills where idSkills = 3");
        return $query->result_array();
    }
    public function get4(){
        $query = $this->db->query("SELECT * FROM Skills where idSkills = 4");
        return $query->result_array();
    }
    public function update($object){
        
    }
    /**
     * simulation d'un select * from skills
     */
    public function getSkills(){
        return array (
        [
            "id"=>1,
            "name"=>"html"
        ],
        [
            "id"=>2,
            "name"=>"css"
        ],
        [
            "id"=>3,
            "name"=>"js"
        ],
        );
    }
}

