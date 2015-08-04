<?php
namespace Dp\Decorator;

class DivDecorator extends HtmlDecoratorAbstract
{
	protected $title	= null;
	
	public function __toString()
	{
		$str	 = '<div>';
		$str	.= (null !== $this->title) ? '<h1>' . $this->title . '</h1>' : '';
		$str	.= $this->element->__toString();
		$str	.= '</div>';
		return $str;
	}
	
	public function setTitle($title)
	{
		$this->title	= $title;
	}
}