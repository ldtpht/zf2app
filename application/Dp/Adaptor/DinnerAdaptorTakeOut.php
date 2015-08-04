<?php
namespace Dp\Adaptor;

class DinnerAdaptorGoOut extends DinnerAdaptorAbstract implements DinnerAdaptorInterface
{
	public function execute()
	{
		echo 'Search for a ' . $this->getType() . ' restarurant under ' . $this->getBudget() . 'VND';
		echo '<br>';
		echo 'Getting out from your house';
		echo '<br>';
		echo 'Taking a taxi';		
		echo '<br>';
		echo 'Entering a restarurant';
		echo '<br>';
		echo 'Ordering menus';
		echo '<br>';
		echo 'Eating foods';		
	}
}