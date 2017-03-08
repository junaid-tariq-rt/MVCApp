<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModelFactory
 *
 * @author junaid.tariq
 */
class ModelFactory {
    //put your code here
    private $array = ['student' => 'Student', 'teacher' => 'Teacher',
         'course' => 'Course'];
    
    

    public function constructModel($name){
        if (array_key_exists($name, $this->array)) {
        
            return new $this->array[$name]();
        }
    }
}
