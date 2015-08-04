<?php
namespace Dp\Decorator;

abstract class HtmlDecoratorAbstract implements HtmlInterface
{
	protected $element	= null;
	
	public function __construct(HtmlInterface $element)
	{
		$this->element	= $element;
	}
	
	public function getName()
	{
		return $this->element->getName();
	}
	
	public function __toString()
	{
		echo $this->element->__toString();
	}
}