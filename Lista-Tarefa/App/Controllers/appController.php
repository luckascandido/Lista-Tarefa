<?php

namespace App\Controllers;

//os recursos do framework
use MF\Controller\Action;
use MF\Model\Container;

class AppController extends Action {
	
	public function nova_tarefa() {
		$this->view->erroCadastro = false;
		$this->render('nova_tarefa', "layout");
	}
	public function todas_tarefas() {

		$this->render('todas_tarefas', "layout");
	}
	public function cadastro_tarefa(){
		$this->view->erroCadastro = false;
		$this->view->Cadastrosucess = false;
		
		if($_POST['descricao'] != ''){
			$this->view->Cadastrosucess = true;
			$this->render('nova_tarefa', "layout");
		}else{
			$this->view->erroCadastro = true;
			$this->render('nova_tarefa', "layout");
		}
	}
}


?>