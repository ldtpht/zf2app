<?php
namespace Dp\Decorator;

class ItalicDecorator extends HtmlDecoratorAbstract
{
	public function __toString()
	{
		$str	 = '<i>';
		$str	.= $this->element->__toString();
		$str	.= '</i>';
		return $str;
	}
}