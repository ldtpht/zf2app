<?php
namespace Dp\Adaptor;

class DinnerAdaptorGoOut extends DinnerAdaptorAbstract implements DinnerAdaptorInterface
{
	public function execute()
	{
		echo 'Search for a ' . $this->getType() . ' shop under ' . $this->getBudget() . 'VND';
		echo '<br>';
		echo 'Getting out from your house';
		echo '<br>';
		echo 'Taking a walk to a shop';
		echo '<br>';
		echo 'Ordering a menu';
		echo '<br>';
		echo 'Returning to your house';
		echo '<br>';
		echo 'Eating foods';
	}
}