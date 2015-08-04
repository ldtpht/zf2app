<?php
namespace Dp\Factory;

abstract class AbstractDriver
{
	protected $handler;
	
	abstract protected function setHandler();
	
	abstract protected function output($message);
	
	public function __construct()
	{
		$this->setHandler();
	}
	
	public function write($message)
	{
		$date	= new \DateTime();
		$this->output($date->format('c') . "\t" . $message);
	}
}