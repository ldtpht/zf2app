<?php
namespace Dp\Factory;

class Logger
{
	public static function factory($driverName)
	{
		$driverClassname	= '\\Dp\\Factory\\' . ucfirst($driverName) . 'Driver';
		return new $driverClassname();
	}
}
