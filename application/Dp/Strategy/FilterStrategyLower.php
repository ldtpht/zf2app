<?php
namespace Dp\Strategy;

class FilterStrategyLower implements FilterStrategyInterface 
{
	public function apply($text)
	{
		return strtolower($text);
	}
}