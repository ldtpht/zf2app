<?php
namespace Dp\Composite;

abstract class NodeAbstract
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
	
	public function printFormat($isFolder=true)
	{
		$marker	= (true === $isFolder) ? 'folder':'tag';
		printf('<li>[%s] %s</li>', $marker, $this->getName());
	}
}