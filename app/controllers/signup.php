<?php

namespace app\controllers;

use app\libs\Controller;

class Signup extends Controller
{
    public function __construct()
    
    {
        parent::__construct();
        $this->view->render('signup');
    }


    public function login()
    {
        echo "in da login";
    }
}    