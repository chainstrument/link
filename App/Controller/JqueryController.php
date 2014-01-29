<?php

namespace App\Controller;

use App\Core\Controller;
use App\Core\Config;


class JqueryController extends Controller
{


    public function init()
    {
        Config::addCss('jquerytest.css');
        Config::getSmarty()->assign('title', 'no one');
        parent::display();
    }

    public function index()
    {
        $this->renderView('Jquery/form.tpl');

    }




}

