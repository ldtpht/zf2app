<?php
namespace Dp\Adaptor;

class DinnerAdaptorCook extends DinnerAdaptorAbstract implements DinnerAdaptorInterface
{
	public function execute()
	{
		echo 'Search for a ' . $this->getType() . ' recipe book';
		echo '<br>';
		echo 'Pick a recipe';
		echo '<br>';
		echo 'Check your refregiator for required ingredients';
		echo '<br>';
		echo 'Cooking';		
		echo '<br>';
		echo 'Eating foods';		
	}
}