<?php
namespace App\Models;
use MF\Model\Model;

  class Tarefas extends Model{
   
    private $id;
    private $fk_id_status;
    private $tarefa;
    private $data_cadastro;
    private $data_finalizado;
    

    public function __get($atributo)
    {
       return $this->$atributo;
    }
    public function __set($atributo, $value)
    {
        $this->$atributo = $value;
    }
    //salvar
    public function salvarTarefa(){
        
    }
    //recuperar
    public function getAll(){
    }
    public function deletarTarefa(){
     
      
    }

  }

?>