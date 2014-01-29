<?php
/**
 * Created by PhpStorm.
 * User: TREPIA
 * Date: 20/01/14
 * Time: 15:49
 */

namespace App\Model;

use App\Core\Model;


class Ressource extends Model
{
    protected $id;

    protected $name;

    protected $lien;

    protected $type;

    protected $remarque;

    protected $id_category;

    protected $date_add;

    protected $row_db = array('name', 'lien','id_category', 'type', 'remarque');

    public function __construct()
    {
        $this->date_add = new \DateTime();
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
     * @param mixed $id_category
     */
    public function setIdCategory($id_category)
    {
        $this->id_category = $id_category;
    }

    /**
     * @return mixed
     */
    public function getIdCategory()
    {
        return $this->id_category;
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

    /**
     * @param mixed $lien
     */
    public function setLien($lien)
    {
        $this->lien = $lien;
    }

    /**
     * @return mixed
     */
    public function getLien()
    {
        return $this->lien;
    }

    /**
     * @param mixed $remarque
     */
    public function setRemarque($remarque)
    {
        $this->remarque = $remarque;
    }

    /**
     * @return mixed
     */
    public function getRemarque()
    {
        return $this->remarque;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }


    public function getClassName()
    {
        return 'ressource';
    }

}