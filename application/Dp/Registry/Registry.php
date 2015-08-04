<?php
namespace Dp\Registry;

class Registry
{
	protected $container	= null;
	
	public function __construct()
	{
		$this->initContainer();
	}
	
	public function initContainer()
	{
		$this->container	= new \ArrayObject();
	}
	
	public function set($key, $value)
	{
		$this->container[$key]	= $value;
		return $this;
	}
	
	public function get($key)
	{
		return ($this->has($key))
			? $this->container[$key]
			: null;
	}
	
	public function has($key)
	{
		return (bool)(isset($this->container[$key]));
	}
}