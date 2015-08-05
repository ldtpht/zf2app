<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Form\Form;
use Zend\Form\Element;
use Application\Entity\Student;

Class StudentController extends AbstractActionController
{
	public function indexAction()    {
		echo "test::index()";
		exit;
	}
	public function listAction()
	{
		$gateway	= $this->getStudentTable();
		$student	= $gateway->fetchAll();
		return new ViewModel(array(
				'student'=>$student
		));
	}
	
	public function addAction()
	{
		$id = new Element('id');
		$id->setAttributes(array(
				'type'  => 'hidden'
		));
		
		$name = new Element('name');
		$name->setLabel('Your name');
		$name->setAttributes(array(
				'type'  => 'text'
		));
		
		$send = new Element('send');
		$send->setValue('Submit');
		$send->setAttributes(array(
				'type'  => 'submit',
				'class' => 'btn btn-success'
		));
		$form    = new Form();
		$form->add($id)
		->add($name)
		->add($send);
		$request    = $this->getRequest();
		if ($request->isPost())
		{
			echo "add";
			$entity    = new Student();
			$form->setInputFilter($entity->getInputFilter());
		
			$form->setData($request->getPost());
			if ($form->isValid())
			{
				$entity->exchangeArray($form->getData());
				$table    = $this->getStudentTable()
				->save($entity);
				return $this->redirect()->toRoute('student');
			}
		
		}
		return new ViewModel(array(
				'form'    => $form
		));
	}
	
	// --------------------------Action edit--------------------------
	public function editAction()
	{
		$id = (int) $this->params('id', 0);
		if (!$id)
		{
			return $this->redirect()->toRoute('student', array(
					'action' => 'add'
			));
		}
	
		$table    = $this->getStudentTable();
		try
		{
			$student    = $table->get($id);
		}
		catch (\Exception $ex)
		{
			return $this->redirect()->toRoute('student');
		}
	
		$form  = new \Application\Form\User();
		$form->bind($student);
	
		$request = $this->getRequest();
		if ($request->isPost())
		{
			$form->setInputFilter($student->getInputFilter());
			$form->setData($request->getPost());
	
			if ($form->isValid())
			{
				$table->save($student);
				return $this->redirect()->toRoute('profile');
			}
		}
	
		return new ViewModel(array(
				'id' => $id,
				'form' => $form,
		));
	}
	
	//----------action delete----------------------------------------------------

	public function deleteAction()
	{
		$id = (int) $this->params('id', 0);
		if (!$id)
		{
			return $this->redirect()->toRoute('student');
		}
		 
		$table    = $this->getStudentTable();
		$student = $table->get($id);
	
		$request = $this->getRequest();
		if ($request->isPost())
		{
			if ('Yes' == $request->getPost('confirm', 'No'))
			{
				$id = (int) $request->getPost('id');
				$table->delete($id);
			}
			return $this->redirect()->toRoute('student');
		}
	
		return new ViewModel(array(
				'student' => $student
		));
	}
	
	public function getStudentTable()
	{
		return $this->getServiceLocator()
		->get('Application\Service\Model')
		->get('Application\Model\StudentTable');
	}
	
	

}
