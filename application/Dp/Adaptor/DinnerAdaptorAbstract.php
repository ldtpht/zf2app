<?php
namespace Dp\Adaptor;

abstract class DinnerAdaptorAbstract
{
	protected $type;
	protected $budget;
	
	public function setType($type)
	{
		$this->type	= $type;
	}
	
	public function getType()
	{
		return $this->type;
	}
	
	public function setBudget($budget)
	{
		$this->budget	= $budget;
	}
	
	public function getBudget()
	{
		return $this->budget;
	}
}