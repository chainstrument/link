<?php

namespace App\Core;

use PDO;

class Db
{

        protected $_host;
        protected $_dbname;
        protected $_user;
        protected $_password;
 
        protected $_connexion;
        static public  $_handle;
 
        public static $_instance = null;

        public function __construct($server = null, $name = null, $user = null, $password = null)
        {
                $this->_host = ($server) ? $server : _DB_SERVER_ ;
                $this->_dbname = ($name) ? $name: _DB_NAME_ ;
                $this->_user = ($user) ? $user : _DB_USER_ ;
                $this->_password = ($password) ? $password : _DB_PASSWORD_;
                
                
                try {
                        $this->_handle = new PDO("mysql:host=$this->_host;dbname=$this->_dbname", $this->_user, $this->_password);
                        $this->_handle->setAttribute(\PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        // echo 'Connection established and database "' . $this->_dbname . '" selected.';
                } catch (\PDOException $e) {
                        die('Connection failed or database cannot be selected : ' . $e->getMessage());
                }
 
        }

        public static function getInstance()
        {
        
                if(is_null(self::$_instance))
                        return new self();
                else return self::$_instance;
        
        }



}