<?php

namespace app\controllers;

use app\libs\Controller;

class Error extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->render('error');
    }
}