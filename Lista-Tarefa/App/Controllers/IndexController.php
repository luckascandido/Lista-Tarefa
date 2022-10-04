<?php

namespace App\Controllers;

//os recursos do framework
use MF\Controller\Action;
use App\Models\Tarefas;
use MF\Model\Container;

class IndexController extends Action {

	public function index() {
		$tarefas = container::getModel("Tarefas");
        $tarefas= $tarefas->getAll();
        $this->view->tarefas =  $tarefas;
		$this->render('index', "layout");
	}

}


?>