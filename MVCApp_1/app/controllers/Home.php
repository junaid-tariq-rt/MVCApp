<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Home extends BaseController{
    
    function __construct($data = array()) {
        parent::__construct($data);
    }

    
    public function index(){ 
        
        $this->render(true);
    }
   
}