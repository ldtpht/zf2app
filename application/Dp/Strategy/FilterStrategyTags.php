<?php
namespace Dp\Strategy;

class FilterStrategyTags implements FilterStrategyInterface 
{
	public function apply($text)
	{
		return strip_tags($text);
	}
}