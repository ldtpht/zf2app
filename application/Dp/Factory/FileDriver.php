<?php
namespace Dp\Factory;

class FileDriver extends AbstractDriver
{
	protected function setHandler()
	{
		$logfile	= APPLICATION_ROOT . '/application/data/factory-sample.txt';
		$this->handler	= fopen($logfile, 'a+');
	}

	protected function output($message)
	{
		fwrite($this->handler, $message . "\n");
	}
}