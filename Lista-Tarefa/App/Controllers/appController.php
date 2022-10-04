<?php

namespace App\Controllers;

//os recursos do framework
use MF\Controller\Action;
use MF\Model\Container;

class AppController extends Action {

	public function nova_tarefa() {

		$this->render('nova_tarefa', "layout");
	}
	public function todas_tarefas() {

		$this->render('todas_tarefas', "layout");
	}
}


?>