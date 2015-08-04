<?php
namespace Dp\Factory;
require_once '../init.php';
?>
<?php include "../htmlheader.php"; ?>

<h1>Factory sample</h1>

<p>Writing Log</p>
<?php

$logger	= Logger::factory('file');
$logger->write('PHP will open a directory if a path with no file name is supplied. This just bit me. I was not checking the filename part of a concatenated string. ');

?>
<p>done</p>

<?php include "../htmlfooter.php"; ?> 