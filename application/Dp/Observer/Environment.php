<?php
namespace Dp\Observer;

class Environment implements \SplSubject
{
	protected $observers	= array();
	public $temperature	= null;
	public $humidity	= null;
	
	public function attach(\SplObserver $observer)
	{
		$this->observers[spl_object_hash($observer)]	= $observer;
	}
	
	public function detach(\SplObserver $observer)
	{
		unset($this->observers[spl_object_hash($observer)]);
	}
	
	public function notify()
	{
		foreach ($this->observers as $observer)
		{
			$observer->update($this);
		}
	}
	
	public function setStatus($temperature, $humidity)
	{
		$this->temperature	= $temperature;
		$this->humidity		= $humidity;
		return $this;
	}
	
	public function getTemperature()
	{
		return $this->temperature;
	}
	
	public function getHumidity()
	{
		return $this->humidity;
	}
}