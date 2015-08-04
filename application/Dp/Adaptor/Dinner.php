<?php
namespace Dp\Adaptor;

class Dinner
{
	protected $adaptor	= null;
	protected $type		= null;
	protected $budget	= null;
	
	public function setType($type)
	{
		$this->type	= $type;
	}
	
	public function setBudget($budget)
	{
		$this->budget = $budget;
	}
	
	public function setAdaptor(DinnerAdaptorInterface $adaptor)
	{
		$this->adaptor	= $adaptor;
	}
	
	public function moveNow()
	{
		$this->adaptor->setType($this->type);
		$this->adaptor->setBudget($this->budget);
		$this->adaptor->execute();
	}
}