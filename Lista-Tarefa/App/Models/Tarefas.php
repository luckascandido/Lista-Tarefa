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
    //salvar a tarefa no banco
    public function salvarTarefa(){
        $query= "insert into tb_tarefas(tarefa)values(:tarefa)";
        $stmt= $this->db->prepare($query);
        $stmt->bindValue(":tarefa",$this->__get("tarefa"));
        $stmt->execute();  
    }
    //recuperar a tarefa no banco
    public function getAll(){
        $query = "
        select 
         t.id, u.status, t.tarefa,   DATE_FORMAT(t.data_cadastro, '%d/%m/%Y %H:%i') as data 
        from 
         tb_tarefas as t 
         left join tb_status as u 
         on (t.fk_id_status = u.id)
        order by
          t.data_cadastro desc
         ";
        $stmt= $this->db->prepare($query );
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function tarefasPendentes(){
      $query = "
      select 
       t.id, t.tarefa,    DATE_FORMAT(t.data_cadastro, '%d/%m/%Y %H:%i') as data 
      from 
       tb_tarefas as t 
       left join tb_status as u 
       on (t.fk_id_status = u.id)
      where
        t.fk_id_status = 1
      order by
        t.data_cadastro desc
       ";
      $stmt= $this->db->prepare($query );
      $stmt->execute();
      return $stmt->fetchAll(\PDO::FETCH_ASSOC);
  }
      public function editarTarefa(){
        $query = "
        update 
        tb_tarefas 
        SET
        tarefa = :tarefa
        where
        id = :id
       ";
       $stmt= $this->db->prepare($query);
       $stmt->bindValue(":tarefa",$this->__get("tarefa"));
       $stmt->bindValue(":id",$this->__get("id"));
       $stmt->execute();
      }

    //deleta a tarefa no banco
        public function deletarTarefa(){
     
      
    }

  }

?>