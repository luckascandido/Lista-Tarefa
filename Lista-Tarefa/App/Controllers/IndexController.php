<?php

namespace App\Controllers;

//os recursos do framework
use MF\Controller\Action;
use App\Models\Tarefas;
use MF\Model\Container;

class IndexController extends Action {

	public function index() {
		//recebe todas as tarefas e chama a pagina index.
		$tarefas = container::getModel("Tarefas");
        $tarefas= $tarefas->tarefasPendentes();
        $this->view->tarefas =  $tarefas;
		$this->render('index', "layout");
	}

}


?>