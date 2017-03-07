<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControllerFactory
 *
 * @author junaid.tariq
 */
class ControllerFactory {
    //put your code here
    private $array = ['home' => 'Home', 'student' => 'Student',
        'teacher' => 'Teacher', 'course' => 'Course'];
    
    

    public function constructController($name){
        if (array_key_exists($name, $this->array)) {
        
            return new $this->array[$name]();
        }
    }
    
}
