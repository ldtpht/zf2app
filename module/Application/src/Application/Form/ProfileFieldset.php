<?php
namespace Application\Form;

use Zend\Form\Fieldset;

class ProfileFieldset extends Fieldset
{
   public function __construct($name = null, $options = array())
     {
         parent::__construct($name, $options);
      $this->add(array(
         'type' => 'hidden',
         'name' => 'id'
      ));

      $this->add(array(
         'type' => 'text',
         'name' => 'name',
         'options' => array(
           'label' => 'Name'
         )
      ));

      $this->add(array(
         'type' => 'text',
         'name' => 'address',
         'options' => array(
            'label' => 'Address'
         )
      ));
   }
}