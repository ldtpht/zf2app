<?php
namespace Dp\Composite;

class Tag extends NodeAbstract implements NodeInterface
{
	public function __coonstruct($name)
	{
		parent::__construct($name);
	}
	
	public function add(NodeInterface $node)
	{
		return $this;
	}
	
	public function remove(NodeInterface $node)
	{
		return $this;
	}
	
	public function getChildren()
	{
		return array();
	}
	
	public function printFormat($isFolder=true)
	{
		parent::printFormat(false);
	}
}