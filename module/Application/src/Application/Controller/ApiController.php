<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Form\Form;
use Zend\Form\Element;
use Application\Entity\Score;
use Zend\View\Model\JsonModel;

Class ApiController extends AbstractActionController
{
	public function indexAction()    {
		$gateway	= $this->getScoreTable();
		$scores	= $gateway->fetchAll();
		$labels = $q1 = $q2 = $q3 = $q4 = array();
		foreach ($scores as $score) {
			$labels[] = $score->name;
			$q1[] = $score->q1;
			$q2[] = $score->q2;
			$q3[] = $score->q3;
			$q4[] = $score->q4;
		}
		$dataset = array();
		$dataset['q1'] = $q1;
		$dataset['q2'] = $q2;
		$dataset['q3'] = $q3;
		$dataset['q4'] = $q4;

				return new ViewModel(array('json' => new JsonModel(
			array(
				'labels' => $labels,
				'datasets' => $dataset
				))));


}

public function getScoreTable()
{
	return $this->getServiceLocator()
	->get('Application\Service\Model')
	->get('Application\Model\ScoreTable');
}
}
