<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Form\ProfileForm;
use Application\Entity\Profile;
use Zend\Form\FormInterface;
use Zend\Form\Form;
use Zend\Form\Element;


class ProfileController extends AbstractActionController
{   
    public function indexAction(){
        $gateway	= $this->getServiceLocator()->get('Application\Model\ProfileTable');
        $profiles	= $gateway->fetchAll();
        return new ViewModel(array(
            'profiles'=>$profiles
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
        
        $address = new Element('address');
        $address->setLabel('Your address');
        $address->setAttributes(array(
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
                ->add($address)
                ->add($send);
        
        $request    = $this->getRequest();
        if ($request->isPost())
        {
            $entity    = new Profile();
            $form->setInputFilter($entity->getInputFilter());
            
            $form->setData($request->getPost());
            if ($form->isValid())
            {
                $entity->exchangeArray($form->getData());
                $table    = $this->getServiceLocator()
                                        ->get('Application\Model\ProfileTable')
                                        ->save($entity);
                return $this->redirect()->toRoute('profile');
            }
        }
        
        return new ViewModel(array(
                'form'    => $form
        ));
    }
    
    
     public function editAction()
    {
        $id = (int) $this->params('id', 0);
        if (!$id)
        {
            return $this->redirect()->toRoute('profile', array(
                    'action' => 'add'
            ));
        }
        
        $table    = $this->getServiceLocator()->get('Application\Model\ProfileTable');
        try
        {
            $profile    = $table->get($id);
        }
        catch (\Exception $ex)
        {
            return $this->redirect()->toRoute('profile');
        }
    
        $form  = new \Application\Form\User();
        $form->bind($profile);
    
        $request = $this->getRequest();
        if ($request->isPost())
        {
            $form->setInputFilter($profile->getInputFilter());
            $form->setData($request->getPost());
    
            if ($form->isValid())
            {
                $table->save($profile);
                return $this->redirect()->toRoute('profile');
            }
        }
    
        return new ViewModel(array(
                'id' => $id,
                'form' => $form,
        ));
    }
    
    public function deleteAction()
     {
         $id = (int) $this->params('id', 0);
         if (!$id)
         {
             return $this->redirect()->toRoute('profile');
         }
         
         $table    = $this->getServiceLocator()->get('Application\Model\ProfileTable');
         $profile = $table->get($id);

         $request = $this->getRequest();
         if ($request->isPost())
         {
             if ('Yes' == $request->getPost('confirm', 'No'))
             {
                 $id = (int) $request->getPost('id');
                 $table->delete($id);
             }
             return $this->redirect()->toRoute('profile');
         }

         return new ViewModel(array(
             'profile' => $profile
         ));
     }


}

?>