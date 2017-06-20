<?php

class SkillsModel extends CrudModel{
    
    public function add($object){
        
    }
    public function delete($id){
        
    }
    public function get($id){
        
    }
    public function getAll(){
        $query = $this->db->query("SELECT * FROM skills");
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

