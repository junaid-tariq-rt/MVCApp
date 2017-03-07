<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaseController
 *
 * @author junaid.tariq
 */
class BaseController implements ControllerInterface{
    
    public function model($model) {
//        $modFac = new ModelFactory();
//        //require_once '../app/models/'.$model.'.php';
//        return $modFac->constructModel($model);
    }

    public function view($view, $data = []) {
        
        require_once ''.ROOT.DS.'app/views/'. $view . '.php';
    }
}
