<?php

namespace app\libs;

class Controller
{
    public function __construct()
    {
        $this->view = new View();
    }
}