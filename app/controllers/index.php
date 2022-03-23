<?php

namespace app\controllers;

use app\libs\Controller;

class Index extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->render('index');
    }
}