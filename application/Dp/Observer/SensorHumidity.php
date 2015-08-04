<?php
namespace Dp\Observer;

class SensorHumidity extends SensorAbstract implements \SplObserver
{
	public function update(\SplSubject $environment)
	{
		$humd	= $environment->getHumidity();
		if ($humd < $this->min)
		{
			echo sprintf('<p>humidity: %d is too low</p>', $humd);
		}
		elseif ($humd > $this->max)
		{
			echo sprintf('<p>humidity: %d is too high</p>', $humd);
		}
	}
}