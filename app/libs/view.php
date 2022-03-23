<?php

namespace app\libs;

class View
{
    public function __construct()
    {
        
    }

    public function render($name)
    {
        require '../app/views/' . $name . '.php';
    }
}