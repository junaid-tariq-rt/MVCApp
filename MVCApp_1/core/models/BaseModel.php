<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaseModel
 *
 * @author junaid.tariq
 */
class BaseModel implements ModelInterface {

    protected $db;
    
    function __construct() {
        //$this->db = Database::getInstance();
    }

    
    public function add($table, $data) {
        
    }

    public function delete($table, $conditions) {
        
    }

    public function edit($table, $data, $conditions) {
        
    }

}
