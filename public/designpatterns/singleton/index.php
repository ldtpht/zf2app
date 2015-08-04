<?php
namespace Dp\Singleton;
require_once '../init.php';
?>
<?php include "../htmlheader.php"; ?>
<h1>Singleton Samples</h1>
<h2>loading PHP version</h2>
<code>
<?php
	$config	= Configuration::getInstance();
	var_dump($config->getVersion());
?>
</code>
<h2>loading PHP version again</h2>
<code>
<?php
	$config	= Configuration::getInstance();
	var_dump($config->getVersion());
?>
</code>
<h2>loading PHP version from another script "sideload.php"</h2>
<code>
<?php require_once 'sideload.php'; ?>
</code>

<h3>How many times did you see the message "parsing ini file!"?</h3>
<?php include "../htmlfooter.php"; ?> 