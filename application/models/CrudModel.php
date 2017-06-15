<?php

abstract class CrudModel extends CI_Model {
    
    public function _contruct(){
        $this->load->database();
    }


    abstract function getAll();
    abstract function get($id);
    abstract function add($object);
    abstract function update($object);
    abstract function delete($id);
    
}
