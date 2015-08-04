<?php
namespace Dp\Mvc;

class Controller
{
	protected $params	= null;
	
	public function setParams($params)
	{
		$this->params	= $params;
	}
	
	public function index()
	{
		$view	= new View(__FUNCTION__);
		$view->render();
	}
	
	public function listdata()
	{
		$model	= new Model();
		$data	= $model->fetchAll();
		$view	= new View(__FUNCTION__);
		$view->set('data', $data);
		$view->set('a', 'aaaa');
		$view->render();
	}
}