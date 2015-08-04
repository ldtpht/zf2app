<?php
namespace Dp\Observer;

abstract class SensorAbstract
{
	protected $min;
	protected $max;
	
	public function __construct($min, $max)
	{
		$this->min	= $min;
		$this->max	= $max;
	}
}