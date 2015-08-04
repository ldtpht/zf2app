<?php
namespace Dp\Fmvc;

class ActionController
{
	protected $params	= null;
	
	public function setParams($params)
	{
		$this->params	= $params;
	}
}