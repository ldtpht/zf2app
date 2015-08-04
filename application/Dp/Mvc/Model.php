<?php
namespace Dp\Mvc;

class Model
{
	protected $data	= array(
			'dog'	=> 'bowwow',
			'cat'	=> 'meow',
			'sheep'	=> 'baa',
			'horse'	=> 'whinny',
			'crow'	=> 'caw',
			'cow'	=> 'moo',
			'owl'	=> 'hoot-hoot',
			'rooster'	=> 'cocka-a-doodle-doo'
	);
	
	public function fetchAll()
	{
		return $this->data;
	}
}