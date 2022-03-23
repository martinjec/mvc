<?php

namespace app\libs;

class Router
{
    public $url;

    //Prepare data
    public function __construct()
    {
        $url = $_SERVER['REQUEST_URI'];
        $url = trim($url, '/');
        $url = explode('/', $url);
        $this->url = $url;
        
    }
    //Run routes
    public function getRoute()
    {
        $url = $this->url;
        if (empty($url[0])) {
            $class = "app\controllers\Index";
            new $class;
        } else {
            $class = 'app\controllers\\' . ucfirst($url[0]);
            if (class_exists($class)) {
                if (!empty($url[1])) {
                    $method = $url[1];
                    if (method_exists($class, $method)) {
                        $obj = new $class;
                        $obj->{$url[1]}();
                    }
                } else {
                    new $class;
                }
            } else {
                $class = "app\controllers\Error";
                new $class;
            }
        }
    }
}
