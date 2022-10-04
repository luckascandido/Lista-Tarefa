<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

	protected function initRoutes() {

		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);
		$routes['nova_tarefa'] = array(
			'route' => '/nova_tarefa',
			'controller' => 'appController',
			'action' => 'nova_tarefa'
		);
		$routes['cadastro_tarefa'] = array(
			'route' => '/cadastro_tarefa',
			'controller' => 'appController',
			'action' => 'cadastro_tarefa'
		);
		$routes['todas_tarefas'] = array(
			'route' => '/todas_tarefas',
			'controller' => 'appController',
			'action' => 'todas_tarefas'
		);

		$this->setRoutes($routes);
	}

}

?>