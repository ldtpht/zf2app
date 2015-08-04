<?php
namespace Dp\Observer;

class SensorTemperature extends SensorAbstract implements \SplObserver
{
	public function update(\SplSubject $environment)
	{
		$temp	= $environment->getTemperature();
		if ($temp < $this->min)
		{
			echo sprintf('<p>temperature: %d is too low</p>', $temp);
		}
		elseif ($temp > $this->max)
		{
			echo sprintf('<p>temperature: %d is too high</p>', $temp);
		}
	}
}