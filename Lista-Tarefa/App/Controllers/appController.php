<?php

namespace App\Controllers;

//os recursos do framework
use MF\Controller\Action;
use App\Models\Tarefas;
use MF\Model\Container;

class AppController extends Action {
	//chama a pagina nova_tarefa
	public function nova_tarefa() {
		$this->view->erroCadastro = false;
		$this->view->Cadastrosucess = false;
		$this->render('nova_tarefa', "layout");
	}
	//chama a pagina todas_tarefas
	public function todas_tarefas() {
		$tarefas = container::getModel("Tarefas");
        $tarefas= $tarefas->getAll();
        $this->view->tarefas =  $tarefas;
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
	public function editarform() {
		$tarefa = container::getModel('Tarefas');
		$tarefa->__set('tarefa',$_POST['tarefa']);
		$tarefa->__set('id',$_POST['id']);
		$tarefa->__set('data_cadastro', date('m-d-Y h:i:s a', time()));
		$tarefa->editarTarefa();
		header('Location:/todas_tarefas');

	}
}


?>