<?php
namespace App\Models;
use MF\Model\Model;

  class Status extends Model{
   
    private $id;
    private $status;
    

    public function __get($atributo)
    {
       return $this->$atributo;
    }
    public function __set($atributo, $value)
    {
        $this->$atributo = $value;
    }


     
   
  }

?>