<?php
namespace Dp\Fmvc;

spl_autoload_register();

define('APPLICATION_ROOT', realpath("../../../"));
set_include_path(APPLICATION_ROOT . '/application/');

$bootstrap	= new Bootstrap();
$bootstrap->run();