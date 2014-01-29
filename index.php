<?php
 
ini_set("display_errors", "on");
require_once __DIR__.'/config/define.php';
require_once 'src/Symfony/Component/ClassLoader/UniversalClassLoader.php';
require_once __DIR__. '/lib/Smarty-3.1.15/libs/Smarty.class.php';
require_once __DIR__. '/config/define.php';


use Symfony\Component\ClassLoader\UniversalClassLoader;
use App\Core\FrontController;
use App\Core\Config;

$loader = new UniversalClassLoader();
$loader->registerNamespaces(array(
    'App/Core' =>  __DIR__.'/App/Core/', 
    'App/Controller' =>  __DIR__.'/App/Controller/', 
    'App/Model' =>  __DIR__.'/App/Model/', 
));

$loader->useIncludePath(true);
$loader->register();
$smarty = new Smarty();
Config::setsmarty($smarty);
Config::smartyConfig();

$frontController = new FrontController();
$frontController->run();
