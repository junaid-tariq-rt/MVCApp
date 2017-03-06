<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Request
 *
 * @author junaid.tariq
 */
class Request {

    //put your code here
//    protected $controller = 'home';
//    protected $action = 'index';
//    protected $params = array();

    private $array = ['controller' => 'home', 'action' => 'index',
        'params' => array()];
    
    /**
     * 
     * @param string $name Key 
     * @return string Value stored against that key
     * 
     * Returns value against key
     */
    public function __get($name) {
        if (array_key_exists($name, $this->array)) {
            return $this->array[$name];
        }
    }

    /**
     * 
     * @param string $name Key for array
     * @param string $value Value to be set against key
     * 
     * Sets the attriute value if present in array
     */
    public function __set($name, $value) {
        if (array_key_exists($name, $this->array)) {
            $this->array[$name] = $value;
        }
    }
    
    /**
     * constructor
     */
    function __construct() {
        //echo $_SERVER['REQUEST_URI'];
        $this->run($_SERVER['REQUEST_URI']);
        //echo $this->controller . ' ' . $this->action;
    }

    /**
     * 
     * @param string $path query string to extract params
     */
    function run($path) {
        if ($_GET) {

            $url = explode('?', $path);

            if (isset($_GET['controller'])) {
                $this->controller = $_GET['controller'];
            }
            if (isset($_GET['action'])) {
                $this->action = $_GET['action'];
            }
            $str = $url[1];

            parse_str($str, $output);

            echo $output['controller'];  // value
            echo $output['action']; // foo bar
            foreach ($output['arr'] as $param) {
                echo $param;
                $this->params[] = $param;
            }
        } elseif ($_POST) {
            foreach ($_POST as $key => $value) {
                if($key == 'controller'){
                    $this->controller = $value;
                }elseif($key == 'action'){
                     $this->action = $value;
                }else{
                    $this->params[] = $value;
                }   
            }
        } else {
            
            $uri = urldecode(trim($path, '/'));
            
            $path_parts = explode('/', $uri);
            
            array_shift($path_parts);
            array_shift($path_parts);
            array_shift($path_parts);
            
            
            
            $this->controller = current($path_parts);
            array_shift($path_parts);
            
            $this->action = current($path_parts);
            array_shift($path_parts);
            
            $this->params = $path_parts;
            
        }
        
    }

}