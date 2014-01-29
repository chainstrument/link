<?php 

namespace App\Core;

use App\Core\Db;
use App\Core\ModelInterface;

abstract class Model implements ModelInterface
{

    public  function select()
    {

        $sql = 'SELECT * FROM '.$this->getClassName();

        try{

            $prep = Db::getInstance()->_handle->query($sql);
            return $prep->fetchAll();
           // return $res->setFetchMode(PDO::FETCH_OBJ);
        }
        catch(PDOException $e)
        {
            return die('<p>Erreur lors de la selection : '.$e->getMessage().'</p>');
        }
    }

    public function update()
    {
        $sql = 'UPDATE '.$this->getClassName().' SET ';

        foreach($this->row_db as $key => $value)
        {
            $sql .= $value.' = \''.$this->$value.'\', ';

        }
        $sql = rtrim($sql, ', ');
        $sql .= ' WHERE id =  '.$this->id;
        //echo $sql;

        try{
            $prep = Db::getInstance()->_handle->prepare($sql);
            $prep->execute();
        }
        catch(PDOException $e)
        {
            return die('<p>Erreur lors de la mise a jour : '.$e->getMessage().'</p>');
        }
    }

    public function delete()
    {
        $sql = 'DELETE FROM '.$this->getClassName().' WHERE id = '.$this->id;
        try{
            $prep =  Db::getInstance()->_handle->prepare($sql);
            $prep->execute();
        }
        catch(PDOException $e)
        {
            return die('<p>Erreur durant la suppression : '.$e->getMessage().'</p>');
        }
    }

    public function save()
    {
        try{

            $sql = 'INSERT INTO '.$this->getClassName().' (';
            $sql .= implode($this->row_db, ', ');

            $sql .= ') VALUES (';

             foreach ($this->row_db as $value)
             {
                 $sql .= '\''.$this->$value.'\', ';

             }

            $sql = rtrim($sql, ', ');
            $sql .= ')';
            //echo $sql;
           // die();
            $prep =  Db::getInstance()->_handle->prepare($sql);
            $prep->execute();
        }
        catch(PDOException $e)
        {
            return die('<p>Erreur durant l\'insertion : '.$e->getMessage().'</p>');
        }
    }



    public function find($id)
    {

        $sql = 'SELECT * FROM '.$this->getClassName().' WHERE id='.$id;
       // echo $sql;
        try{

            $prep = Db::getInstance()->_handle->query($sql);
            return $prep->fetch();
            // return $res->setFetchMode(PDO::FETCH_OBJ);
        }
        catch(PDOException $e)
        {
            return die('<p>Erreur lors de la selection : '.$e->getMessage().'</p>');
        }
    }

    public static function getModel($string)
    {
        $className = '\App\Model\\' .ucfirst($string);
        try{

            return new $className;

        }catch(\Exception $e){

            die('Class '.$string.' doesnt exists : ' . $e->getMessage());
        }
    }
}