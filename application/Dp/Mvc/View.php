<?php
namespace Dp\Mvc;

class View
{
	protected $template	= null;
	
	protected $container	= array();
	
	public function __construct($filename)
	{
		$this->template	= APPLICATION_ROOT . '/application/templates/' . $filename . '.php';
	}
	
	public function render()
	{
		foreach($this->container as $key=>$value)
		{
			$$key	= $value;
		}
		include $this->template;
	}
	
	public function set($key, $value)
	{
		$this->container[$key]	= $value;
	}
}