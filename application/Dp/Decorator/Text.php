<?php
namespace Dp\Decorator;

class Text implements HtmlInterface
{
	protected $name	= null;
	
	public function __construct($name)
	{
		$this->name	= $name;
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	public function __toString()
	{
		return $this->getName();
	}
}