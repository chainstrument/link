<?php

namespace App\Controller;

use App\Core\Controller;
use App\Core\Config;
use App\Model\Ressource;
use App\Core\Model;

class IndexController extends Controller
{


    public function init()
    {
        Config::getSmarty()->assign('title', 'no one');
        parent::display();
    }

	public function index()
	{
        $this->renderView('Index/index.tpl');



	}


}

