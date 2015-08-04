<?php
namespace Dp\Fmvc;

class Bootstrap
{
	protected $action	= null;
	protected $params	= array();
	
	public function __construct()
	{
		$this->params	= $_GET;
	}
	
	public function run()
	{
		$front	= new FrontController();
		$front->setParams($this->params);
		$front->dispatch();
	}
}