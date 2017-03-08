<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of App
 *
 * @author junaid.tariq
 */
class App {

    //put your code here
    private $request;
    
    private $controller;

    function __construct() {
        
        $this->run();
    }

    public function run() {
        
        $this->request = new Request();
       
        $this->controller = ControllerFactory::constructController($this->request->controller);
        
        $this->controller->run($this->request);
    }

}
