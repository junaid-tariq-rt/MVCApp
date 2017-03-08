<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author junaid.tariq
 */
class Student extends BaseController {

    function __construct($data = array()) {
        parent::__construct($data);
    }

    function index() {
        $mod = 'studentmod';
        $tbl = 'student';

        $this->model = ModelFactory::constructModel($mod);


        $this->data['students'] = $this->model->listAll(Config::get($tbl));
        
        $this->render(true, $this->data);
    }

}
