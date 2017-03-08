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
class BaseController implements ControllerInterface {

    protected $controller = 'home';
    protected $model;
    protected static $action = 'index';
    protected $data;
    protected $params;
    protected $renderFlag = true;
    private static $reqCont;

    function __construct($data = array()) {
        $this->data = $data;
    }

    public function render($data = []) {
        include ROOT . DS . 'app/views/generic/default.php';
        include ROOT . DS . 'app/views/' . lcfirst(self::$reqCont) . DS . self::$action . '.php';
    }

    public function run($request) {
        self::$reqCont = $request->controller;

        if (file_exists(ROOT . DS . 'app/controllers/' . ucfirst($request->controller) . '.php')) {
            $this->controller = new $request->controller();
        }
        
        $controller_method = $request->action;

        if (method_exists($this->controller, $controller_method)) {
            self::$action = $request->action;
        }

        $this->params = $request->params;

        $this->callMethod($this->controller, self::$action);
    }

    function callMethod($cont, $act) {
        $cont->$act();
        if ($this->controller->renderFlag == true) {
            $this->render($this->controller->data);
        }
    }

}
