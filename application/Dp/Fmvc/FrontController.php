<?php
namespace Dp\Fmvc;

class FrontController
{
	protected $params		= null;
	protected $controller	= null;
	protected $action		= null;
	
	public function setParams($params)
	{
		$this->params	= $params;
		$this->controller	= isset($params['controller']) ? $params['controller'] : 'index';
		$this->action		= isset($params['action']) ? $params['action'] : 'index';
	}
	
	public function dispatch()
	{
		$targetName	= '\\Dp\\Fmvc\\' . ucfirst($this->controller) . 'Controller';
		$target		= new $targetName();
		$target->setParams($this->params);
		$target->{$this->action}();
	}
}