<?php
/**
 * Created by PhpStorm.
 * User: TREPIA
 * Date: 20/01/14
 * Time: 15:55
 */

namespace App\Model;

use App\Core\Model;
use App\Core\Db;

class Category extends Model
{

    protected $id;
    protected $name;
    protected $date_add;


    protected $row_db = array('name');

    public function __construct()
    {
    }

    /**
     * @param mixed $date_add
     */
    public function setDateAdd($date_add)
    {
        $this->date_add = $date_add;
    }

    /**
     * @return mixed
     */
    public function getDateAdd()
    {
        return $this->date_add;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


    public function getClassName()
    {
        return 'category';
    }

    public function getNameById($id)
    {

            $sql = 'SELECT name FROM category WHERE id = '.$id;
            try{

                $prep = Db::getInstance()->_handle->query($sql);
                $res =  $prep->fetch();
                 return $res['name'];
            }
            catch(PDOException $e)
            {
                return die('<p>Erreur lors de la selection : '.$e->getMessage().'</p>');
            }

    }

}