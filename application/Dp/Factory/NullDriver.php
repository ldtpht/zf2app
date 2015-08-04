<?php
namespace Dp\Factory;

class NullDriver extends AbstractDriver
{
	protected function setHandler()
	{
		$this->handler	= null;
	}
	
	protected function output($message)
	{
		// NullDriver mutes everything
	}
}