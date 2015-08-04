<?php
namespace Dp\Strategy;

class FilterStrategyUpper implements FilterStrategyInterface 
{
	public function apply($text)
	{
		return strtoupper($text);
	}
}