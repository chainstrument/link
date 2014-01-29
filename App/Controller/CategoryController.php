<?php

namespace App\Controller;

use App\Core\Controller;
use App\Core\Config;
use App\Model\Category;
use App\Core\Model;

class CategoryController extends Controller
{


    public function init()
    {
        Config::getSmarty()->assign('title', 'no one');
        parent::display();
    }

    public function index()
    {


    }

    public function lister()
    {
        $res = Model::getModel('category');

        $category = $res->select();
        // $res->save();
        Config::getSmarty()->assign('category', $category);

        $this->renderView('Category/lister.tpl');


    }

    public function add()
    {
        if(isset($_POST['name']))
        {
            $category = Model::getModel('category');
            $category->setName($_POST['name']);
            $category->save();
            $this->redirect('Category/lister');
        }
        $this->renderView('Category/save.tpl');
    }

    public function update($id)
    {
        $res = Model::getModel('category');

        $ressource = $res->find($id);
        $this->renderView('Category/update.tpl');

    }

}

