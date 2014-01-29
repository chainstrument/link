<?php 

namespace App\Core;

use App\Core\Config;

class Controller{


	public function __construct()
	{
	
	}

	public function render($view)
	{	

	}
	
	public function getMenu()
	{

			$myMenu = array( _DOCUMENT_ROOT_.'index' => 'Accueil', 'ressource' => array(  _DOCUMENT_ROOT_.'ressource/add' => 'ajouter',
											_DOCUMENT_ROOT_.'ressource/lister' => 'liste' ),

                     'category' =>     array(  _DOCUMENT_ROOT_.'category/add' => 'ajouter',
                                         _DOCUMENT_ROOT_.'category/lister' => 'liste' ) );
	// $menu = $this->addPrefix($myMenu);
	// d($menu);
			Config::getSmarty()->assign('myMenu' ,$myMenu);
			
	}
	
	public function getHeader()
	{
			$myCss = array('bootstrap.min.css',
											'jquery-ui.css',
											'css/style.css',
											 );
			Config::addCss($myCss);
			
			$myJs = array('jquery-1.10.2.min.js',
											'jquery-ui.min.js',
											'bootstrap.min.js',
											 );
			Config::addJs($myJs);
			
			
			
			Config::getSmarty()->assign('js_file' ,Config::getJs());
			Config::getSmarty()->assign('css_file' ,Config::getCss());
			Config::getSmarty()->assign('root' ,_DOCUMENT_ROOT_);
			// Context::getContext()->smarty->assign('myMenu' ,$myMenu);
	}
	
	
	public function getFooter()
	{
			$foot = 'next app';
        Config::getSmarty()->assign('foot' ,$foot);
			
	}
	
	public function display()
	{

			$this->getHeader();
			$this->getMenu();
			$this->getFooter();
			// var_dump(Config::$smarty);
            Config::getSmarty()->display('gabarit.tpl');


	}

    public function renderView($view)
    {

        Config::getSmarty()->assign('tpl_file',$view);

        $this->init();
    }

    public function redirect($redirect)
    {
           header('Location: '._DOCUMENT_ROOT_.$redirect.'');
            exit;
    }
 
}