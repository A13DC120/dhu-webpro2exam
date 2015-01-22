<?php
require_once('RoomsModels.php');
require_once('RoomsView.php');

class RoomsController
{
	private $model;
	private $view;

	public function index(){
		$this->model = new RoomsModels();
		$this->model->all();

		$this->view = new RoomsView();
		$this->view->render();

	}
}

$controller = new RoomsController();
$controller->index();
