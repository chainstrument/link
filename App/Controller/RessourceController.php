<?php

namespace App\Controller;

use App\Core\Controller;
use App\Core\Config;
use App\Model\Ressource;
use App\Core\Model;

class RessourceController extends Controller
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
        $resRes = Model::getModel('ressource');
        $resCat = Model::getModel('category');

        $ressource = $resRes->select();

        foreach($ressource as $key => &$value)
        {
            $tab_retour[] = array_merge($value, array('nom_cat' => $resCat->getNameById($value['id_category'])));
        }

        Config::getSmarty()->assign('ressource', $tab_retour);

        $this->renderView('Ressource/lister.tpl');

    }

    public function add()
    {
        if(isset($_POST['name']))
        {
            $ressource = Model::getModel('ressource');
            $ressource->setName($_POST['name']);
            $ressource->setLien($_POST['link']);
            $ressource->setRemarque($_POST['remarque']);
            $ressource->setType($_POST['type']);
            $ressource->setIdCategory($_POST['category']);
            $ressource->save();
            $this->redirect('ressource/lister');
        }

        $cat = Model::getModel('category');
        $liste_cat = $cat->select();
        Config::getSmarty()->assign('list_cat', $liste_cat);

        $this->renderView('Ressource/save.tpl');
    }

    public function update($id = null)
    {
        $res = Model::getModel('ressource');
        $res_cat = Model::getModel('category');
        if(isset($_POST['id']))
        {
            $res->setId($_POST['id']);
            $res->setName($_POST['name']);
            $res->setLien($_POST['link']);
            $res->setIdCategory($_POST['category']);
            $res->setType($_POST['type']);
            $res->update();
            $this->redirect('ressource/lister');
        }


        $ressource = $res->find($id);
        $categories= $res_cat->select();

        Config::getSmarty()->assign('category', $categories);
        Config::getSmarty()->assign('ressource', $ressource);
        $this->renderView('Ressource/update.tpl');

    }

    public function delete($id)
    {
        $ressource = Model::getModel('ressource');
        $ressource->setId($id);
        $ressource->delete();
        $this->redirect('ressource/lister');

    }
}

