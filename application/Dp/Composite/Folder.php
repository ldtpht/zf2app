<?php
namespace Dp\Composite;

class Folder extends NodeAbstract implements NodeInterface
{
	protected $children	= null;
	
	public function __coonstruct($name)
	{
		$this->children	= new \ArrayObject();
		parent::__construct($name);
	}
	
	public function add(NodeInterface $node)
	{
		$this->children[$node->getName()]	= $node;
		return $this;
	}
	
	public function remove(NodeInterface $node)
	{
		unset($this->children[$node->getName()]);
		return $this;
	}
	
	public function getChildren()
	{
		return $this->children;
	}
	
	public function printFormat($isFolder=true)
	{
		parent::printFormat();
		if (count($this->children) > 0)
		{
			echo '<ul>';
			foreach($this->children as $node)
			{
				$node->printFormat($isFolder);
			}
			echo '</ul>';
		}
	}
}