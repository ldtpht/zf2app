<?php
namespace Dp\Singleton;

class Configuration
{
	protected static $instance	= null;
	protected $container	= array();
	
	protected function __construct()
	{
		echo 'parsing ini file!<br><br>';
		$configFile	= APPLICATION_ROOT . '/application/data/config.ini';
		$this->container	= parse_ini_file($configFile);
	}
	
	public static function getInstance()
	{
		if (null == self::$instance)
		{
			self::$instance	= new self();
		}
		return self::$instance;
	}
	
	public function __clone()
	{
		throw Exception('You should NOT clone');
	}
	
	
	public function getVersion()
	{
		return $this->container['phpversion'];
	}
}