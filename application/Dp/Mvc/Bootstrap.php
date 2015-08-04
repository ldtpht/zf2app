<?php
namespace Dp\Mvc;

class Bootstrap
{
	protected $action	= null;
	protected $params	= array();
	
	public function __construct()
	{
		$this->action	= isset($_GET['action']) ? $_GET['action'] : 'index';
		$this->params	= $_GET;
	}
	
	public function run()
	{
		$controller	= new Controller();
		$controller->setParams($this->params);
		$controller->{$this->action}();
	}
}