<?php

namespace MVC\core;


class app
{
    private $controller = 'homecontroller';
    private $method     =  'index';
    private $params = [];
    public function __construct()
    {
        $this->url();
        $this->render();
    }

    private function url()
    {
        if (!empty($_SERVER['QUERY_STRING'])) { 
            $url = explode('/', $_SERVER['QUERY_STRING']);
            $this->controller = $url[0] . 'controller';
            if (isset($url[1]) && $url[1] != '') {
                $this->method = $url[1];
            }
            
            unset($url[0], $url[1]);
            $this->params = array_values($url);


        }
    }
    private function render()
    {

        $controller = 'MVC\controllers\\' . $this->controller;

        if (class_exists($controller)) {

            $controller = new $controller;

            if (method_exists($controller, $this->method)) {

                call_user_func_array([$controller, $this->method], $this->params);
            } else {
                echo ' Function not exists';
            }
        } else {
            echo 'class not exists';
        }
    }
}
