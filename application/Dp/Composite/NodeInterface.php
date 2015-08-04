<?php
namespace Dp\Composite;

interface NodeInterface
{
	public function add(NodeInterface $node);
	
	public function remove(NodeInterface $node);
	
	public function getName();
	
	public function getChildren();
	
	public function printFormat($isFolder=true);
}