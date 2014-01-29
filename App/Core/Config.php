<?php

namespace App\Core;


class Config
{

    /**
     * @var
     * Variable to the template system
     */
    protected  static $smarty;

    private static $css_file = array();

    private static $js_file = array();

	public function __construct()
	{
	}



    public static function smartyConfig()
    {
        self::$smarty->template_dir = dirname(__FILE__).'/../../App/View/';
        self::$smarty->compile_dir = dirname(__FILE__).'/../../cache/smarty/compile';

        self::$smarty->assign('css_dir' , _CSS_DIR_);
        self::$smarty->assign('js_dir' , _JS_DIR_);
    }

    public static function setSmarty(\Smarty $smarty)
    {
        self::$smarty = $smarty;
    }

    public static function getSmarty()
    {
        return self::$smarty;
    }

    public static function addJs($file)
    {
        if(is_array($file))
        {
           self::$js_file =  array_merge(self::$js_file, $file);
        }else{
               array_push(self::$js_file, $file);
        }
    }

    public static function addCss($file)
    {
        if(is_array($file))
        {
           self::$css_file =  array_merge(self::$css_file, $file);
        }else{
               array_push(self::$css_file, $file);
        }
    }

    public function getJs()
    {
        return self::$js_file;
    }


    public function getCss()
    {
        return self::$css_file;
    }

}