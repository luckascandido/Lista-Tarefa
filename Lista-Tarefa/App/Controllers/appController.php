<?php

namespace App\Controllers;

//os recursos do framework
use MF\Controller\Action;
use App\Models\Tarefas;
use MF\Model\Container;

class AppController extends Action {
	
	public function nova_tarefa() {
		$this->view->erroCadastro = false;
		$this->view->Cadastrosucess = false;
		$this->render('nova_tarefa', "layout");
	}
	public function todas_tarefas() {

		$this->render('todas_tarefas', "layout");
	}
	public function cadastro_tarefa(){
		$this->view->erroCadastro = false;
		$this->view->Cadastrosucess = false;

		if($_POST['descricao'] != ''){
			$tarefa = container::getModel('Tarefas');
			$tarefa->__set('tarefa',$_POST['descricao']);
			$tarefa->salvarTarefa();
			$this->view->Cadastrosucess = true;
			$this->render('nova_tarefa', "layout");
		}else{
			$this->view->erroCadastro = true;
			$this->render('nova_tarefa', "layout");
		}
	}
}


?>