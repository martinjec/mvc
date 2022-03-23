<?php

namespace app\controllers;

use app\libs\Controller;

class About extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->render('about');
    }
}